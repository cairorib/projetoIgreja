import React, {useState, useEffect} from 'react';
import {View, Image,Text, ScrollView ,FlatList , TouchableOpacity} from 'react-native';
import styles from './styles';
import logo from '../../assets/logoapp.png';
import {useNavigation} from '@react-navigation/native';
import api from '../../services/api';
import {Video} from 'expo-av';
import iconBible from '../../assets/icons/biblia.png';
import iconSchendule from '../../assets/icons/agenda.png';
import iconHands from '../../assets/icons/hands.png';
import iconFaith from '../../assets/icons/faith.png';
import iconPrayer from '../../assets/icons/prayer.png';
import iconMedias from '../../assets/icons/medias.png';
import iconFamily from '../../assets/icons/family.png';
import iconStore from '../../assets/icons/store.png';
import iconSow from '../../assets/icons/sow.png';
import iconPolitica from '../../assets/icons/politica.png';
import iconAvisos from '../../assets/icons/avisos.png';

import { Montserrat_500Medium } from '@expo-google-fonts/montserrat';

//import { Play_700Bold } from '@expo-google-fonts/play';
import { useFonts,Play_400Regular,Play_700Bold } from '@expo-google-fonts/play';
import {AppLoading } from 'expo'; 





 
export default function home(){
 

   const[fontsLoader] = useFonts({
    Play_400Regular, Play_700Bold,Montserrat_500Medium

 });   
 
 const navigation= useNavigation();
 
 if(!fontsLoader){
     return <AppLoading/>
 }
 
    return(
        <View style={styles.container}>
            
             
             <Video
                source={{ uri: 'https://media.istockphoto.com/videos/holding-hands-worship-video-id473354643' }}
                style={styles.backgroundVideo}
                rate={1.0}
                volume={0.0}
                isMuted={false}
                resizeMode="cover"
                shouldPlay
                isLooping
                resizeMode='cover'
                
                />

            <View style={styles.header}>
                <Image source={logo} style={styles.logo} />
               
            </View>
            
            <ScrollView
            showsVerticalScrollIndicator={false}
            >
                <View style={styles.gradeIcons}>
                    <View sytle={styles.frameIcon}>
                    <TouchableOpacity
                    onPress={()=>navigation.navigate('webview')}  >
                    <Image source={iconBible} style={styles.icon} />
                        <Text 
                            style={{
                            fontFamily:'Play_400Regular', 
                            color:'#FFF',
                            fontSize:15,
                            textAlign:'center',
                            
                            }}
                        
                        >BÍBLIA</Text>
                     </TouchableOpacity>    
                   </View>

                   <View>
                   <TouchableOpacity
                    onPress={()=>{ }}
                  >
                   <Image source={iconSchendule} 
                    style={{
                    marginLeft:4,
                    height:60,
                    width:60,
                    marginBottom:5,
                       }} 
                    />
                        <Text  
                            style={{
                            fontFamily:'Play_400Regular', 
                            color:'#FFF',
                            fontSize:15,
                            textAlign:'center',
                            marginLeft:3,
                            }}
                        
                        >AGENDA</Text>    
                  </TouchableOpacity>
                   </View>

                   <View>
                   <Image source={iconHands} 
                   style={{
                    marginLeft:4,
                    height:60,
                    width:60,
                    marginBottom:5,
                       }} 
                   
                   />
                        <Text 
                        style={{
                        fontFamily:'Play_400Regular', 
                        color:'#FFF',
                        fontSize:15,
                        textAlign:'center',
                        marginLeft:3,
                        }}>{`REUNIÕES`}</Text>    
                   </View>
               
                </View>
                <View style={styles.gradeIcons}>
                <View>
                        <TouchableOpacity
                        onPress={()=>navigation.navigate('Reflection')}
                        >
                        <Image source={iconFaith} style={styles.icon} />
                        <Text style={{
                        fontFamily:'Play_400Regular', 
                        color:'#FFF',
                        fontSize:15,
                        textAlign:'center',
                          
                        }}
                        >{`PARA\nREFLETIR`}</Text>
                        </TouchableOpacity>    
                   </View>
                    <View>
                    <Image source={iconPrayer} 
                    style={{
                        marginLeft:7,
                        height:60,
                        width:60,
                        marginBottom:5,
                           }} 
                    
                    
                    />
                        <Text 
                        style={{
                            fontFamily:'Play_400Regular', 
                            color:'#FFF',
                            fontSize:15,
                            textAlign:'center',
                         }}
                        >{`PEDIDOS\nDE ORAÇÃO`}</Text>    
                   </View>
                   
                   <View>
                        <Image source={iconAvisos} style={styles.icon} />
                        <Text 
                        style={{
                            fontFamily:'Play_400Regular', 
                            color:'#FFF',
                            fontSize:15,
                            textAlign:'center',
                         }}
                        
                        
                        >{`AVISOS\nDA IGREJA`}</Text>    
                   </View>
                  
               
                </View>
                <View style={styles.gradeIcons}>
                    <View>
                    <Image source={iconMedias} 
                     style={{
                        marginLeft:7,
                        height:60,
                        width:60,
                        marginBottom:5,
                           }} 
                    />
                    <Text 
                    style={{
                        fontFamily:'Play_400Regular', 
                        color:'#FFF',
                        fontSize:15,
                        textAlign:'center',
                     }}
                    >{`ONDE\nESTAMOS`}</Text>    
                   </View>
                   <View>
                   <Image source={iconStore} style={styles.icon} />
                        <Text 
                         style={{
                            fontFamily:'Play_400Regular', 
                            color:'#FFF',
                            fontSize:15,
                            textAlign:'center',
                         }}
                        >STORE</Text>    
                   </View>
                   <View>
                   <Image source={iconSow} 
                   style={{
                    marginLeft:15,
                    height:60,
                    width:60,
                    marginBottom:5,
                       }} 
                   
                   />
                    <Text 
                     style={{
                        fontFamily:'Play_400Regular', 
                        color:'#FFF',
                        fontSize:15,
                        textAlign:'center',
                     }}
                    >{`CONTRIBUIR`}</Text>    
                   </View>
               
                </View>

                <View style={styles.gradeIcons}>
                    <View>
                    <Image source={iconFamily} 
                     style={{
                        marginLeft:7,
                        height:60,
                        width:60,
                        marginBottom:5,
                           }} 
                    />
                    <Text 
                    style={{
                        fontFamily:'Play_400Regular', 
                        color:'#FFF',
                        fontSize:15,
                        textAlign:'center',
                     }}
                    >{`SOBRE NÓS`}</Text>    
                   </View>
                  {/*  <View>
                   <Image source={iconStore} style={styles.icon} />
                        <Text 
                         style={{
                            fontFamily:'Play_400Regular', 
                            color:'#FFF',
                            fontSize:15,
                            textAlign:'center',
                         }}
                        >STORE</Text>    
                   </View> */}
                   <View>
                   <Image source={iconPolitica} 
                   style={{
                    marginLeft:15,
                    height:60,
                    width:60,
                    marginBottom:5,
                       }} 
                   
                   />
                    <Text 
                     style={{
                        fontFamily:'Play_400Regular', 
                        color:'#FFF',
                        fontSize:15,
                        textAlign:'center',
                     }}
                    >{`SOBRE O APP`}</Text>    
                   </View>
               
                </View>
                

                
            </ScrollView>

               
          
             
            
            

         </View>


    );

}