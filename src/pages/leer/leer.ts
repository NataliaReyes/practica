import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { HomePage} from '../home/home';
import {ComentarioPage} from '../comentario/comentario';
import {CinesPage} from '../cines/cines';
@Component({
  selector: 'page-leer',
  templateUrl: 'leer.html'
})
export class LeerPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {

  }

  ionViewDidLoad(){
      console.log('ionViewDidLoad LeerPage');
  }
  
  ci(){
    this.navCtrl.push(CinesPage);
  }
}
