import React, {useEffect, useState} from 'react';
import {View, ImageBackground,Text, FlatList , TouchableOpacity} from 'react-native';
import {Feather } from '@expo/vector-icons';
import styles from './styles';
import Imagem from '../../assets/reflexao.png';
import {useNavigation} from '@react-navigation/native';
import api from '../../services/api';
//import { ScrollView } from 'react-native-gesture-handler';
//import { Montserrat_400Regular } from '@expo-google-fonts/montserrat';
import { useFonts,Montserrat_500Medium } from '@expo-google-fonts/montserrat';

export default function Reflection(){
 
    
    const navigation = useNavigation();

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

    return(
        <View style={styles.container}>
             
             <View style={styles.header}>
                <ImageBackground source={Imagem} style={styles.imagem}>
                    <TouchableOpacity
                    onPress={()=>{navigation.goBack()}}
                    >
                        <View style={styles.textBackground}>
                        <Feather name='arrow-left' size={20} color='#fff' />
                        <Text style={{color:'#ffff', fontFamily:'Montserrat_500Medium'}}>MENU</Text>
                        </View>
                    </TouchableOpacity>
                </ImageBackground>
            </View>
              
            <Text style={{fontFamily:'Montserrat_500Medium', fontSize:20, marginLeft:10}}>
                Reflexões
            </Text>
             
            <Text style={{fontFamily:'Montserrat_500Medium', fontSize:15, marginLeft:10}}>
                Palavras para sua edificação
            </Text>
        

            <FlatList
               
                data={reflections}
                style={styles.reflexaoList}
                keyExtractor={reflection =>String(reflection.id)}
                showsVerticalScrollIndicator={false}
                renderItem={({item:reflection})=>(

                    <View style={styles.reflexao}>
                        <Text style={{fontFamily:'Montserrat_500Medium', fontSize:15, marginTop:10, marginLeft:20}}>{reflection.title}</Text>
                         
                            <TouchableOpacity 
                                style={styles.detailsButton} 
                                onPress={()=>{navigateToreflexaoMsg(reflection)}}>
                                    <View style={{flexDirection:'row', alignItems:'center', marginLeft:'80%'}}>
                                    <Text style={{fontFamily:'Montserrat_500Medium', fontSize:10}}> Ver mais</Text>
                                    <Feather name='arrow-right' size={16} color='#E02041'  />   
                                    </View>
                            </TouchableOpacity>
                    </View>


                )}
            

            />

 
        </View>


    );

}