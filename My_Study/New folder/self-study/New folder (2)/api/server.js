const express = require('express')
const taskModel = require('./models/model')
const app = express()

app.use(express.json())
app.use(express.urlencoded({extended:false}))

app.get('/task', (req,res)=>{
    const task = taskModel.getAllTasks(parseInt(req.params.id));
    res.status(200).json({success: true, data:task});
})


const port = 3000       
app.listen(port,()=>{
    console.log("Server run port: " + port);
})