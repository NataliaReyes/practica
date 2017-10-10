import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { HomePage} from '../home/home';
import {CreatePage} from '../create/create';
@Component({
  selector: 'page-login',
  templateUrl: 'login.html'
})
export class LoginPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {

  }

  ionViewDidLoad(){
      console.log('ionViewDidLoad LoginPage');
  }

  cre(){
    this.navCtrl.push(CreatePage);
  }
  

}
