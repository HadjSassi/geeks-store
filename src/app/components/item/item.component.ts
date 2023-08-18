import { Component, OnInit } from "@angular/core";
import { Item } from "../../../app/models/item.model";
@Component({
  selector: "app-item",
  templateUrl: "./item.component.html",
  styleUrls: ["./item.component.css"],
})
export class ItemComponent implements OnInit {
  item: Item;
  selectedQuantity: number = 1;
  selectedColor: string;
  constructor() {}

  ngOnInit() {
    this.item = {
      id: 1,
      name: "Geeks T-shirt",
      description: "This is an example item , Geeks T-shirt very cool",
      image: "path/to/image.jpg", //for now I put an image from the internet
      price: 9.99,
      colors: ["Red", "Blue", "Green"],
    };
  }
  addToCart() {
    // Perform the necessary logic to add the selected item to the user's cart
    console.log(
      "Item added to cart:",
      this.item,
      "Quantity:",
      this.selectedQuantity,
      "Color:",
      this.selectedColor
    );
  }
}
