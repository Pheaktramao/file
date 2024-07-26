var House = /** @class */ (function () {
    function House() {
        this.chairs = [];
    }
    /**
     * Add a chair of given ID
     * @param chairID the chair ID
     * @return the created chair
     */
    House.prototype.addChair = function (chairID) {
        //todo
        var newchair = new Chair(chairID, this);
        this.chairs.push(newchair);
        return newchair;
    };
    House.prototype.getChairs = function () {
        return this.chairs;
    };
    return House;
}());
var Chair = /** @class */ (function () {
    function Chair(chairId, house) {
        this.chairId = chairId;
        this.house = house;
    }
    Chair.prototype.getChairId = function () {
        return this.chairId;
    };
    Chair.prototype.getHouse = function () {
        return this.house;
    };
    return Chair;
}());
// MAIN
var newHouse = new House();
var newChair = newHouse.addChair(45); // Add a chair of id 45
console.log(newChair.getChairId());
// let newHouse = new House();
// let newChair = newHouse.addChair(45); // Add a chair with ID 45
// let chairs = newHouse.getChairs(); // Get all chairs in the house
// console.log(chairs.length); // Output: 1
// console.log(newChair.getChairId()); // Output: 45
// console.log(newChair.getHouse() === newHouse); // Output: true
