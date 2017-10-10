import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { HomePage} from '../home/home';
import {ComentarioPage} from '../comentario/comentario';
@Component({
  selector: 'page-theothers',
  templateUrl: 'theothers.html'
})
export class TheothersPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {

  }

  ionViewDidLoad(){
      console.log('ionViewDidLoad TheothersPage');
  }

  come(){
    this.navCtrl.push(ComentarioPage);
  }
  
}
