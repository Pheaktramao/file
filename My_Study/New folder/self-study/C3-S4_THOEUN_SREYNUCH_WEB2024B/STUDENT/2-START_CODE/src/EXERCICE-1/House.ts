class House {
  private chairs: Chair[] = [];

  /**
   * Add a chair of given ID
   * @param chairID the chair ID
   * @return the created chair
   */
  addChair(chairID: number): Chair {

    //todo
    const newchair = new Chair(chairID, this);
    this.chairs.push(newchair);
    return newchair;
  }
  getChairs(): Chair[]{
    return this.chairs;
  }
}

class Chair {
  constructor(private chairId: number, private house: House) {}
  getChairId(): number {
    return this.chairId;
  }
  getHouse(): House {
    return this.house;
  }
}

// MAIN
let newHouse = new House();
let newChair = newHouse.addChair(45); // Add a chair of id 45

console.log(newChair.getChairId());