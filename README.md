# Cat_Examen
Examen de entrevista para CAT

1. Create a hyperlink with the following properties:
- Anchor text should be: "Is a<b?"
- Page should be opened in a new window or tab
- Link should point to "http://www.bing.com/search". Query string should contain field with name "q" and value "calculator"

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Link</title>
  </head>
  <body>
    <!-- Write the code below this line -->
  </body>
</html>
```  
2. (Angular) A template component has the following class definition and styles available to it:
```
import { Component } from '@angular/core';
@Component({
    selector: 'demo-app',
    templateUrl: 'app/app.component.html',
    pipes: []
})
export class AppComponent {
    constructor() {
        this.borders = true;
        this.bordersStyle = 'solid-border';
    }
    toggleBorder() {
        this.borders = !this.borders;
        this.bordersStyle = this.borders ? 'solid-border' : 'dashed-border';
    }
}
.solid-border { border-style: solid; }
.dashed-border { border-style: dashed; }
```

Which of the following definitions can be used to toggle between the different border classes on the div tag?
(Select all acceptable answers.)
 
 ```
<div (click)="toggleBorder()" [(ngModel)]="bordersStyle">bordered element</div>
 
<div (click)="toggleBorder()" *ngIf="bordersStyle">bordered element</div>
 
<div (click)="toggleBorder()" [ngClass]="bordersStyle">bordered element</div>
 
<div (click)="toggleBorder()" [bordersStyle]="!toggleBorder">bordered element</div>
 
<div (click)="toggleBorder()" [class]="bordersStyle">bordered element</div>
```

3. Angular) Consider the following component:

```
import { Component, Input } from '@angular/core';

@Component({
  selector: 'clothes',
  template: `
  <ul>
    <li *ngFor="let item of items">
      {{ item }}
    </li>
  </ul>
  
  <p *ngIf="items.length > 2">We stock lots of clothes!</p>
  `,
})
export class ClothesComponent  {
  @Input() items = ['Shirts', 'Pants', 'Hoodies'];
}
```

Select the statements about its use (in another components template) that are correct.
(Select all acceptable answers.)
 
 ```
<clothes [items] = "['Hats']"></clothes> will display: "Hats".
 
<clothes></clothes> will display: "Shirts", "Pants", "Hoodies" and "We stock lots of clothes!".
 
<clothes items = "['Hats']"></clothes> will display: "Hats".
 
<clothes [items] = "['Shirts', 'Hats', 'Hoodies']"></clothes> will display: "Shirts", "Hats", "Hoodies" and "We stock lots of clothes!".
 
<clothes [items] = "'Shirts'"></clothes> will display: "Shirts".
```

4.	(Typesctipt) The following code snippet initializes and iterates over the plants object pushing values into the garden.

```
let plants = ["Oak", "Elm", "Beech"];
plants["Tree"] = "Ash";
plants["Tree"] = "Cherry";
plants["Flower"] = "Rose";

var garden = [];

for (let plant in plants) {
    garden.push(plant);
}

for (let plant of plants) {
    garden.push(plant);
}
```

Which statements about the contents of the garden variable are correct?
(Select all acceptable answers.)

The garden variable contains two copies of the values: "Oak", "Elm", "Beech", "Ash", "Cherry" and "Rose".
 
The garden variable contains the integer values: 0, 1 and 2.
 
The garden variable contains the values: "Oak", "Elm" and "Beech".
 
The garden variable contains the values: "Oak", "Elm", "Beech" and "Rose".
 
The garden variable contains two copies of the value: "Rose".
```

5.	(JQuery, DOM manipulation) A page with comments consists of a list of comments and a form for posting a new comment. This is its HTML code:

```
<ul id='commentList'>
</ul>
<form>
  <input type='text' id='comment'/>
  <input type='button' id='postComment' value='Post'/>
</form>
```

Write a setup function that registers a click handler and implements the following logic:

•	Each time a button with id postComment is clicked, a new <li> element should be added to the bottom of the list with id commentList, containing the value of the text field with the id comment.
•	If the text field is empty, the comment should not be posted.
•	The value of the text field should be cleared after the comment has been posted.
For example, after the comment "test" has been posted, the list's HTML code should look like this:

```
<ul id='commentList'>
  <li>test</li>
</ul>
ECMAScript 6, jQuery v3.4.1 (available as $)   
   Show starting code
 
function setup() {
  // Write your code here.
}

// Example case. 
document.body.innerHTML = `
<ul id='commentList'>
</ul>
<form>
  <input type='text' id='comment'/>
  <input type='button' id='postComment' value='Post'/>
</form>`;

setup();

$("#comment").val("test");
$("#postComment").click();
console.log(document.body.innerHTML);
 ```
