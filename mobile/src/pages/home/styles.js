import { StyleSheet } from 'react-native';
import Constants from 'expo-constants';
import { useFonts,Inter_900Black } from '@expo-google-fonts/inter';
 

export default StyleSheet.create({

    container:{  
        flex:1,
       // paddingHorizontal:10,
        //paddingTop: Constants.statusBarHeight +10,
         
    },
    header:{
        flexDirection:"row",
        alignItems:'center',
        justifyContent:'center',
        marginBottom:40,
        marginTop:40,
        marginLeft:10,
        marginRight:10,
        fontFamily:'Inter_900Black',
        
     },

    logo:{
        
        height:120,
        width:'100%',
    },
    ViewimgPrincipal:{
        width:10,

    },
    imgPrincipal:{
        width:500,
        height:500,
    },

    headertext:{
        fontSize:17,
        color:'#FFF',
        fontWeight:'bold',
        textAlign:'center',
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
    },

    reflexao:{
        paddingTop:10,
        paddingBottom:10,
        borderRadius:10,
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

    listContainer:{
        width:'100%',
        maxHeight:100,
    },

    listContainerNews:{
        width:'100%',
        height:100,
    },

    news:{
        width:330,
        maxHeight:100,
        backgroundColor:'#E20041',
        marginHorizontal:2,
    },

    listContainerMenu:{
        width:'100%',
        height:100,
    },
    menu:{
        borderRadius:8,
        width:100,
        maxHeight:150,
        marginHorizontal:10,
        backgroundColor:'green',
    },
    
    containerAll:{
        width:'100%',
        
         
    },
    backgroundVideo: {
        position: 'absolute',
        top: 0,
        left: 0,
        bottom: 0,
        right: 0,
      },
      gradeIcons:{
        flexDirection:'row',
        justifyContent:'space-between',
        marginLeft:30,
        marginRight:30,
        marginTop:30,
         
      },

      textIcons:{
          fontSize:15,
          color:'#FFF',
          textAlign:'center',
          textAlignVertical:'center'
      },
      frameIcon:{
         
      },
      icon:{
        marginLeft:4,
        height:60,
        width:60,
        marginBottom:4,
    
      },

});