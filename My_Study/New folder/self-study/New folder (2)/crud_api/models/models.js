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
module.exports.getAllTasks = getAllTasks;