let books = [
  {
    id: 1,
    title: 'Laskar Pelangi',
    author: 'Andrea Hirata',
    year: 2005,
    isAvailable: true
  },
  {
    id: 2,
    title: 'Bumi',
    author: 'Tere Liye',
    year: 2014,
    isAvailable: true
  }
];

let nextId = 3;

function getAll(req, res) {
  res.json(books);
}

function getOne(req, res) {
  const id = Number(req.params.id);
  const book = books.find((book) => book.id === id);

  if (!book) {
    return res.status(404).json({ error: 'Book not found' });
  }

  res.json(book);
}

function create(req, res) {
  const { title, author, year, isAvailable } = req.body;

  const newBook = {
    id: nextId++,
    title,
    author,
    year,
    isAvailable
  };

  books.push(newBook);

  res.status(201).json(newBook);
}

function update(req, res) {
  const id = Number(req.params.id);
  const book = books.find((book) => book.id === id);

  if (!book) {
    return res.status(404).json({ error: 'Book not found' });
  }

  const { title, author, year, isAvailable } = req.body;

  book.title = title;
  book.author = author;
  book.year = year;
  book.isAvailable = isAvailable;

  res.json(book);
}

function remove(req, res) {
  const id = Number(req.params.id);

  books = books.filter((book) => book.id !== id);

  res.json({
    message: 'Book deleted successfully',
    data: books
  });
}

module.exports = {
  getAll,
  getOne,
  create,
  update,
  remove
};