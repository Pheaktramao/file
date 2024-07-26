// TODO
import { Publisher } from "./Publisher";
import { Book } from "./Book";
export class Library{
    private name: string;
    private address: string;
    private books: Book[] = [];
    constructor(name: string, address: string){
        this.name = name;
        this.address = address;
    }
    addBook(book: Book){
        this.books.push(book);
    }
    getBooksFromAuthor(author: Author): Book[]{
        return this.books.filter(book => book.getAuthor(author).length > 0);
    }
    getBooksFromPublisher(publisher: Publisher[]): Book[]{
        return this.books.filter(book => book.getPublisher(publisher).length > 0);
    }
}
