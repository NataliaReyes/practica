import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { HomePage} from '../home/home';

@Component({
  selector: 'page-agregar',
  templateUrl: 'agregar.html'
})
export class AgregarPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {

  }

  ionViewDidLoad(){
      console.log('ionViewDidLoad AgregarPage');
  }


}