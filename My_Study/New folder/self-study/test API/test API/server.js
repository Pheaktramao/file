
const express = require('express')
const taskModel = require('./models/model')
const app = express()

app.use(express.json())
app.use(express.urlencoded({ extended: false }))


app.get('/task', (req, res) => {
    const task = taskModel.getAllTasks(parseInt(req.params.id));
    res.status(200).json({success:true, data:task});
})

app.get('/task/:id', (req,res)=>{
    const tasks = taskModel.show(parseInt(req.params.id));
    if (tasks) {
        res.status(200).json({success:true, data:tasks});
    }else{
        res.status(404).json({success:false, message:`cannot find any task with ID ${req.params.id}`});
    }
    res.send(tasks);
})

app.post('/task', (req,res)=>{
    const tasks = taskModel.store(req.body);
    if (tasks) {
        res.status(200).json({success:true, data: tasks});
    }
    res.send(tasks);
})

app.delete('/task/:id', (req,res)=>{
    const tasks = taskModel.destroy(parseInt(req.params.id));
    if (!tasks) {
        res.status(404).json({success:false, message:`Cannot delete task with ID ${req.params.id}`});
    }else{
        res.status(200).json({success: true, message:`Deleted success`});
    }
    return tasks
})

app.put('/task/:id', (req,res)=>{
    const tasks = taskModel.update(parseInt(req.params.id),req.body);
    if (!tasks) {
        res.status(404).json({success:false, message:`Cannot update task with ID ${req.params.id}`});
    }else{
        res.status(200).json({success: true, data:tasks});
    }
    res.send(tasks)
})
const port = 5000;
app.listen(port, () => {
    console.log('Server run port:' + port);
})