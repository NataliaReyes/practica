import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import {InsidiousPage} from '../insidious/insidious';
import {ItPage} from '../it/it';
import {ThecraziesPage} from '../thecrazies/thecrazies';
import {PoltergeistPage} from '../poltergeist/poltergeist';
import {TheothersPage} from '../theothers/theothers';
import {LoginPage} from '../login/login';
import {AgregarPage} from '../agregar/agregar';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  constructor(public navCtrl: NavController, public navParams: NavParams ) {}

  
  load(){
    this.navCtrl.push(InsidiousPage);
  }

  Peit(){
    this.navCtrl.push(ItPage);
  }

  peothers(){
    this.navCtrl.push(TheothersPage);
  }

  pecrazies(){
    this.navCtrl.push(ThecraziesPage);
  }

  pepolter(){
    this.navCtrl.push(PoltergeistPage);
  }

  log(){
    this.navCtrl.push(LoginPage);
  }
  ag(){
    this.navCtrl.push(AgregarPage);
  }

 
  

}
