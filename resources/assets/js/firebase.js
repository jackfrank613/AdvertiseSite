import Firebase from 'firebase'  //import the sdk


// var database = Firebase.initializeApp({
//     apiKey: 'apAIzaSyB9OiZxj6qg6GMxAOUgvsj08jy1jO4dZtQiKey',
//     authDomain: 'jamiifrance.firebaseapp.com',
//     databaseURL:'https://jamiifrance.firebaseio.com',
//     projectId: '1:173946993173:web:420701531132bb72',
//     storageBucket:'jamiifrance.appspot.com',
//     secret: '6P5MgvtPB3gG68lB3pYEDZd6Nh1MZNP2C2FmbCX8'
//       }).database();


      // initialise your app
export default Firebase.initializeApp({
    apiKey: 'apAIzaSyB9OiZxj6qg6GMxAOUgvsj08jy1jO4dZtQiKey',
    authDomain: 'jamiifrance.firebaseapp.com',
    databaseURL:'https://jamiifrance.firebaseio.com',
    projectId: '1:173946993173:web:420701531132bb72',
    storageBucket:'jamiifrance.appspot.com',
    secret: '6P5MgvtPB3gG68lB3pYEDZd6Nh1MZNP2C2FmbCX8'
  })