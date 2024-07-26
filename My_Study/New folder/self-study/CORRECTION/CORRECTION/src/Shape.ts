export abstract class Shape{
    protected leftX: number
    protected bottomY: number
    constructor(leftx: number, bottomy: number) {
        this.leftX = leftx
        this.bottomY=bottomy
    }
    abstract getWidth(): number;
    abstract getHeight(): number;
    abstract getArea(): number;
}