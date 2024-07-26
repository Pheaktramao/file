// TODO
import { Publisher } from './Publisher';
import { Author } from './Author';

export class Book{
    private title: string;
    private publishYear: number;
    private author: Author;
    private publisher: Publisher;
    constructor(title: string, publishYear: number, author: Author, publisher: Publisher){
        this.title = title;
        this.publishYear = publishYear;
        this.author = author;
        this.publisher = publisher;
    }
    addAuthor(author: Author){
        this.author = author;
    }
    addPublisher(publisher: Publisher){
        this.publisher = publisher;
    }
    getAuthor(author: Author): Book[]{
        return this.author.addBook(this);
    }
    getPublisher(publisher: Publisher): Book[]{
        return this.publisher.addBook(this);
    }
}