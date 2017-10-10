import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { HomePage} from '../home/home';
import { MapPage} from '../map/map';

@Component({
  selector: 'page-cines',
  templateUrl: 'cines.html'
})
export class CinesPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {

  }

  ionViewDidLoad(){
      console.log('ionViewDidLoad CinesPage');
  }
  pla(){
    this.navCtrl.push(MapPage);
  }

}