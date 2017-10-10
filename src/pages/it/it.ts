import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { HomePage} from '../home/home';
import {ComentarioPage} from '../comentario/comentario';
@Component({
  selector: 'page-it',
  templateUrl: 'it.html'
})
export class ItPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {

  }

  ionViewDidLoad(){
      console.log('ionViewDidLoad ItPage');
  }
  come(){
    this.navCtrl.push(ComentarioPage);
  }

}
