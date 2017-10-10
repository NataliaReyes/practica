import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { HomePage} from '../home/home';
import {ComentarioPage} from '../comentario/comentario';
@Component({
  selector: 'page-poltergeist',
  templateUrl: 'poltergeist.html'
})
export class PoltergeistPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {

  }

  ionViewDidLoad(){
      console.log('ionViewDidLoad PoltergeistPage');
  }
  come(){
    this.navCtrl.push(ComentarioPage);
  }

}
