const {fs} = require('fs');
const { stringify } = require('querystring');


function load() {
    return JSON.parse(fs.readFileSync("tasks.json"));
}

function save(data) {
    fs.writeFileSync("tasks.json", JSON.stringify(data));
}

function getAllTasks(title = null) {
    const tasks = load();
    if (title) {
        return tasks.filter(task =>task.title.toLowerCase().includes(title.toLowerCase()));
    }
    return tasks;
}
module.exports.getAllTasks = getAllTasks;