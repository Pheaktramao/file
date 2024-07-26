import { Shape } from './Shape';

export class Square extends Shape{
    private size: number;
    constructor(leftx: number, bottomy: number, size: number) {
        super(leftx, bottomy);
        this.size = size;
    }
    getWidth(): number{
        return this.size;
    }
    getHeight(): number{
        return this.size;
    }
    getArea(): number{
        return this.size * this.size;
    }
}