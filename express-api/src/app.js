const express = require('express');
const v1Router = require('./routes/v1');

const app = express();
const PORT = 3000;

app.use(express.json());

app.get('/', (req, res) => {
  res.json({ message: 'Books API is running' });
});

app.use('/api/v1', v1Router);

app.listen(PORT, () => {
  console.log(`Server running on http://localhost:${PORT}`);
});