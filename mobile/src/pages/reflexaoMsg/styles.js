import { StyleSheet } from 'react-native';
import Constants from 'expo-constants';

export default StyleSheet.create({

    container:{ 
        flex:1,
        paddingHorizontal:0,
        paddingTop:0,
         
    },
    header:{
        flexDirection:"row",
        alignItems:'center',
        justifyContent:'space-between',
        
    },
    headertext:{
        fontSize:15,
        color:'#737380',
        fontWeight:'bold',
    },
    title:{
        fontSize:20,
        marginBottom:16,
        marginTop:30,
        fontWeight:'bold',
        color:'#13131a',

    },
    description:{
        fontSize:16,
        lineHeight:24,
        color:'#13131a',
        justifyContent:'center',
        textAlign:'justify',

    },
    reflexaoList:{
        marginTop:10,
        marginLeft:10,
        marginRight:10,

    },

    reflexao:{
        paddingTop:10,
        paddingBottom:10,
        height:80, 
        backgroundColor:'#FFF',
        marginBottom:10,
     },

    reflexaoProperty:{
        fontSize:14,
        fontWeight:'bold',
    },  

    detailsButton:{
        flexDirection:'row',
        justifyContent:'space-between',
        alignItems:'center',
    },  
    detailsButtonText:{
        color:'#E20041',
        fontSize:15,
        fontWeight:'bold',
    },
    imagem:{
        width:'100%',
        height:250,
        paddingLeft:0,
        
    },
    containerAll:{
        marginLeft:10,
        marginRight:10,
    },
    textBackground:{
        marginTop:30,
        flexDirection:'row',
        alignItems:'center',
    
    },
    

    

});