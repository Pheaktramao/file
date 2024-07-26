const express = require('express');
const taskModel = require('./models/models');
const app = express();

app.get('/task', function (req, res) {
    const search = req.query;
    console.log(search.title);
    const tasks = taskModel.getAllTasks(search.title);
    res.status(200).json({ success: true, data: tasks });;
});
const port = 3000;
app.listen(port, ()=>{
    console.log("Server run server: http://localhost:" + port);
})