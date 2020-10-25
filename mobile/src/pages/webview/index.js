import React from 'react';
import {WebView } from 'react-native-webview';
import {View, Text } from 'react-native';
import styles from './styles';
import { TouchableOpacity } from 'react-native-gesture-handler';
import { useNavigation} from '@react-navigation/native';
import { Feather } from '@expo/vector-icons';

import {useFonts, Play_400Regular } from '@expo-google-fonts/play';
import {AppLoading } from 'expo'; 



export default function webview(){

   const[fontsLoader] = useFonts({
      Play_400Regular,
  
   });   

   const navigation=useNavigation();

     return(
  
        
      <View style={styles.container}>
         <View style={styles.header}>
            <TouchableOpacity
            onPress={()=>navigation.goBack()}
            >
               <View style={{flexDirection:'row'}}>
               <Feather name='arrow-left' size={30} color='black' />
            
               <Text style={{fontFamily:'Play_400Regular', marginLeft:30, fontSize:20}}>Bíblia</Text>
               </View>
            </TouchableOpacity>
         </View>
         <WebView
         
        source={{ uri: 'https://www.bibliaon.com' }} 
        />
      
      </View>

     );   


}