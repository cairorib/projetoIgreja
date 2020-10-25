import React, {useState, useEffect} from 'react';
import{View,TextInput,TouchableOpacity,Text } from 'react-native';
import styles from './styles';
import axios from 'axios';
import api from '../../services/api';


export default function formulario(){
      
        const [value, onChangeText] = React.useState('Useless Placeholder');
     
        

        const [reflections, setReflections]= useState([]);
        function navigateToreflexaoMsg(reflection){
            navigation.navigate('reflexaoMsg',{reflection});
        }
    
        async function loadReflections(){
            const response = await api.get('/');
            setReflections(response.data['dados']['reflexao']);
           // console.log(response.data['dados']['reflexao']);
        }
    
        useEffect(()=>{
            loadReflections();
            
        }, []); 

        function enviar(){
          console.log('inicio');
        /*   axios.post("http://192.168.0.2/congregation/index.php/ApiControl/postDadosApi", JSON.stringify({
            name: "cairo",
            email: "teste"
            })) */

            function enviar(){
              console.log('inicio');
               axios.post("http://minhaurl", JSON.stringify({
                name: "nomeUser",
                email: "emailTeste"
                })) 

            axios.post( "http://192.168.0.2/congregation/index.php/ApiControl/postDadosApi",JSON.stringify({i: '90'}))
    .then(function (response) {
        console.log(response);
    });
          
            console.log('ok');
      }
        
       


        return (
            <View style={styles.container}>
                <View style={styles.formulario}>

          <TextInput
            style={{ height: 40,width:'80%',marginLeft:20 ,borderColor: 'gray', borderWidth: 1, }}
            onChangeText={text => onChangeText(text)}
            value={value}
          />
          <TouchableOpacity
          onPress={enviar}
          >
              <Text style={{marginLeft:20,marginTop:40, backgroundColor:'green', width:80, height:40}}>ENVIAR!</Text>
          </TouchableOpacity>
          </View>
          </View>
        );
    

}