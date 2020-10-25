import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';

const AppStack =createStackNavigator();

import reflexaoMsg from './pages/reflexaoMsg';
import Reflection from './pages/refletcion';
import Home from './pages/home';
import webview from './pages/webview';
import Formulario from './pages/formulario';
 
 

export default function routes(){
    return(
    <NavigationContainer>
        <AppStack.Navigator screenOptions={{headerShown:false}} >
        <AppStack.Screen name='formulario' component={Formulario} />
            <AppStack.Screen name='Home' component={Home} />
           
            <AppStack.Screen name='webview' component={webview} />
            <AppStack.Screen name='Reflection' component={Reflection} />
            <AppStack.Screen name='reflexaoMsg' component={reflexaoMsg} />
        </AppStack.Navigator>
        
    </NavigationContainer>
    );
}