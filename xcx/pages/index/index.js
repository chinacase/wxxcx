//index.js
//获取应用实例
var app = getApp()
Page({
  data: {
   
   
    headertext: '',
    headertext1:'',
    imagerUrl:'',
    headUrl: '',
    name: '王欣颖',
    wx: '',
    email:'',
    title:''
  },
  //事件处理函数

  onLoad: function () {
    this.request();
  },

  request(){
    var that =this;
    wx.request({
      url: 'http://test.niooo.cn/test.php',
      success:function(res){
        that.setData({
          headertext: res.data.headertext,
          headertext1: res.data.headertext1,
          imagerUrl: res.data.imagerUrl,
          headUrl: res.data.headUrl,
          name: res.data.name,
          wx: res.data.wx,
          email: res.data.email,
          title:res.data.title,

        })
        wx.setNavigationBarTitle({
          title: that.data.title
        })
      }
    })

  }

 

})
