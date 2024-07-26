const { log } = require('console');
const fs = require('fs');
const { get } = require('http');

function load() {
    return JSON.parse(fs.readFileSync("task.json"));
}

function save(data) {
    fs.writeFileSync("task.json", JSON.stringify(data));
}

function getAllTasks () {
    const tasks = load();
    return tasks;
}

function show(id) {
    const tasks = load();
    const task = tasks.find(task => task.id === id);
    return task
}

function store(newTask){
    const tasks = load();
    const task ={
        id: tasks.length+1,
        title: newTask.title,
        complete: newTask.complete
    }
    tasks.push(task);
    save(tasks);
    return task
}

function destroy(id) {
    const tasks = load();
    const index = tasks.findIndex(tasks => tasks.id === id);
    if (index !== -1) {
        tasks.slice(index,1);
        save(tasks);
        return tasks
    }
}

function update(id,data) {
    const tasks = load();
    const index = tasks.findIndex(task => task.id === id);
    if (index !== -1) {
        const task = {...tasks[index],...data};
        tasks[index] == task;
        save (tasks);
        return task
    }
}
module.exports.getAllTasks = getAllTasks;
module.exports.show = show;
module.exports.store =store;
module.exports.destroy =destroy;
module.exports.update =update;