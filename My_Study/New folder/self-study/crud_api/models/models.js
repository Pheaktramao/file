const fs = require('fs');
const { stringify } = require('querystring');



function load() {
    return JSON.parse(fs.readFileSync("tasks.json"));
}

function save(data) {
    fs.writeFileSync("tasks.json", JSON.stringify(data));
}

function getAllTasks() {
    const tasks = load();
    return tasks;
}

function show(id) {
    const tasks = load();
    const task = tasks.find(task=>task.id === id);
    return task;
}

function store(newTasks) {
    console.log("newTask", newTasks);
    const tasks = load();
    console.log(tasks.length !==0);
    const task={
        id:tasks.length !== 0 ? tasks[tasks.length-1].id+1:1,
        title: newTasks.title,
        complete: newTasks.complete
    }
    tasks.push(task);
    save(tasks);
    return task;
}

function destroy(id) {
    const tasks = load();
    const index = tasks.findIndex(task=>task.id === id);
    if (index !== -1) {
        tasks.splice(index,1);
        save(tasks);
        return true;
    }
}

module.exports.getAllTasks = getAllTasks;
module.exports.show = show;
module.exports.store = store;
module.exports.destroy = destroy;