import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { HomePage} from '../home/home';
import {ComentarioPage} from '../comentario/comentario';
@Component({
  selector: 'page-thecrazies',
  templateUrl: 'thecrazies.html'
})
export class ThecraziesPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {

  }

  ionViewDidLoad(){
      console.log('ionViewDidLoad ThecraziesPage');
  }

  come(){
    this.navCtrl.push(ComentarioPage);
  }
  
}
