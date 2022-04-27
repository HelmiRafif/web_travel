const express = require('express')
const app = express()
const port = 3000
var bodyParser = require('body-parser')
var cors = require('cors')

app.use(bodyParser.json());
app.use(cors({origin: 'http://localhost:5500',}))

app.post('/book', (req, res) => {
  console.log(req.body);
})

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})
