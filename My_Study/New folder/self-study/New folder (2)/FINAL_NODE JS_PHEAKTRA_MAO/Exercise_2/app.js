const express = require('express');
// const { v4: uuidv4 } = require('uuid');
const app = express();
const taskModel = require('./models/models');
const port = 3000;

app.use(express.json());
app.use(express.urlencoded,{extended: false});
app.listen(port, () => {
    console.log(`Example app listening at http://localhost:${port}`)
});
app.get('/', (req, res) => {
   // TODO
    res.status(200).json({status: 200, message:`API is working...`, endpoint: "/api/posts"});
})
/**
 * Description: CRUD posts
 * Endpoint: /api/posts
 */

// Get posts
app.get('/api/posts', (req, res) => {
   // TODO
   const search = req.body;
   console.log(search.title);
   const tasks = taskModel.getAllTasks(search.title);
   if (tasks) {
        res.status(200).json({message:`Get All Posts`, data: tasks});
   }
});

// Get post
app.get('/api/posts/:id', (req, res) => {
    // TODO
    const tasks = taskModel.show(req.params.id);
    if (!tasks) {
        res.status(404).json({message:`Cannot Find this task with ID: ${req.params.id}`});
    }else{
        res.status(200).json({message:`Get a post`, data:tasks});
    }
});

// Create a new post
app.post('/api/posts', (req, res) => {
    // TODO
    const tasks = taskModel.createTask;
    if (tasks) {
        res.status(200).json({message:`Create New post`});
    }
});

// Delete post
app.delete('/api/posts/:id', (req, res) => {
    // TODO
    const tasks = taskModel.destroy(req.param.id)
    if (tasks) {
        res.status(200).json({message:`Delete post from database`});
    }
})

// Update a post
app.put('/api/posts/:id', (req, res) => {
    // TODO
});