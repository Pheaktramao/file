// TODO
import { Library } from './Library';
import { Book } from './Book';
import { Author } from './Author';
import { Publisher } from './Publisher';

// Create some authors
const author1 = new Author('John Doe');
const author2 = new Author('Jane Smith');

// Create some publishers
const publisher1 = new Publisher('Publisher A');
const publisher2 = new Publisher('Publisher B');

// Create a library
const library = new Library('My Library', '123 Main St');

// Create some books
const book1 = new Book('Book 1', 2022, author1, publisher1);
const book2 = new Book('Book 2', 2023, author1, publisher2);
const book3 = new Book('Book 3', 2023, author2, publisher2);

// Add books to the library
library.addBook(book1);
library.addBook(book2);
library.addBook(book3);

// Get books from an author
const booksByAuthor = library.getBooksFromAuthor(author1);
console.log('Books by Author:');
booksByAuthor.forEach(book => {
  console.log(book.getTitle());
});

// Get books from a publisher
const booksByPublisher = library.getBooksFromPublisher(publisher2);
console.log('Books by Publisher:');
booksByPublisher.forEach(book => {
  console.log(book.getTitle());
});