const fs = require('fs');
// const { loadavg } = require('os');


function load() {
    return JSON.parse(fs.readFileSync("database/posts.json"));
}

function save(data) {
    // return load();
    fs.writeFileSync("database/posts.json", stringify(data));
}
function getAllTasks() {
    const tasks = load();
    return tasks
}

function show(id) {
    const tasks = load();
    if (tasks == id) {
        return tasks;
    }
}

function createTask(newTask) {
    const tasks = load();
    const task = {
        "id": newTask.tasks+id,
        "title": tasks.newTask,
        "description": tasks.newTask,
        "isExpired": tasks.isExpired
    }
    save(tasks)
    tasks.push(task)
    return tasks
}

function destroy() {
    const tasks = load();
    if (tasks !== -1) {
        tasks(slice,-1);
    }
}
module.exports.getAllTasks = getAllTasks;
module.exports.show = show;
module.exports.createTask = createTask;
module.exports.destroy = destroy;