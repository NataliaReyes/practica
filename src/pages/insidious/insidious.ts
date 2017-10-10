import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { HomePage} from '../home/home';
import {ComentarioPage} from '../comentario/comentario';
import {LeerPage} from '../leer/leer';


@Component({
  selector: 'page-insidious',
  templateUrl: 'insidious.html'
})
export class InsidiousPage {
  comentario: {comentario: string}[]=[];

  constructor(public navCtrl: NavController, public navParams: NavParams) {

  }

  ionViewDidLoad(){
      console.log('ionViewDidLoad InsidiousPage');
  }
  come(){
    this.navCtrl.push(ComentarioPage);
  }
  le(){
    this.navCtrl.push(LeerPage);
  }

}
