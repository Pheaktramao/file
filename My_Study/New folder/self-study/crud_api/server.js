const express = require('express');
const taskModel = require('./models/models');
const app = express();

app.use(express.json());
app.use(express.urlencoded({ extended: false}))

app.get('/tasks', function (req,res) {
    const search = req.query;
    console.log(search.title);
    const tasks = taskModel.getAllTasks(search.title);
    if (tasks) {
        res.status(200).json({success:true, data:tasks});
    }else{
        res.status(404).json({success:false, message: `Cannot find this tasks.`})
    }
})

app.get('/tasks/:id', (req,res)=>{
    const task =  taskModel.show(parseInt(req.params.id));
    if (task) {
        res.status(200).json({success:true, data:task})
    }else{
        res.status(404).json({success:false, message:`Cannot find with ID ${req.params.id}`});
    }
})
app.post('/tasks', (req,res)=>{
    const task =  taskModel.store(req.body);
    res.status(200).json({success:true, data:task})
})


app.delete('/tasks/:id', (req,res)=>{
    const task =  taskModel.destroy(parseInt(req.params.id));
    if (!task) {
        res.status(404).json({success:false, message:`Cannot delete any task with ID ${req.params.id}`});
    }else{
        res.status(200).json({success:true, message:`task was deleted.`});
    }
})

const port = 3000;
app.listen(port, ()=>{
    console.log("Server run port" + port);
})