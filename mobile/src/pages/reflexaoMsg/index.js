import React from 'react';
import {View, Text, Image,TouchableOpacity} from 'react-native';
import styles from '../reflexaoMsg/styles';
import logo from '../../assets/reflexao.png';
import { Feather } from '@expo/vector-icons';
import { useNavigation, useRoute } from '@react-navigation/native';


export default function reflexaoMsg(){

    const navigation = useNavigation();
    function navigateBack(){
        navigation.goBack();
    }


    const route= useRoute();
    const reflection =route.params.reflection;


    return(
        <View style={styles.container}>
            
            
                <Image source={logo} style={styles.imagem}/>
               
                
             
            <View style={styles.reflexao}>
                        <Text style={styles.reflexaoProperty}>{reflection.title}</Text>
                        <Text style={styles.description}> {reflection.description}  </Text>

                       
                         
            </View>

            <View>
                <TouchableOpacity onPress={navigateBack}>
                        <Feather name='arrow-left' size={28} color='#E82041' />   
                </TouchableOpacity>
            </View>
             
        </View>


    );

}