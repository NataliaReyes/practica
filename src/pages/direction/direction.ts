import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { HomePage} from '../home/home';

@Component({
  selector: 'page-direction',
  templateUrl: 'direction.html'
})
export class DirectionPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {

  }

  ionViewDidLoad(){
      console.log('ionViewDidLoad DirectionPage');
  }


}