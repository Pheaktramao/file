const fs = require('fs');
const { get } = require('http');
const { stringify } = require('qs')

function load() {
    return JSON.parse(fs.readFileSync("tasks.json"))
}

function save(data) {
    fs.writeFileSync("tasks.json", stringify(data));
}

function getAllTasks() {
    const tasks = load();
    return tasks;
}

function show(id) {
    const task = load();
    
}
module.exports.getAllTasks = getAllTasks;