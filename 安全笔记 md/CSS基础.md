# CSS基础
## CSS简介
CSS是层叠样式表
CSS的作用：静态修饰网页，配合各种脚本语言动态地对网页各元素进行格式化
div标签是一个块级元素，span标签是行内元素
**div标签与span标签的区别：**
div标签是一个块级元素，它总是单独占一行，而span标签是一个行内元素，它不会单独占一行
div标签可以包含其他div标签或span标签，而span标签只能包含文本或其他span标签
div标签没有默认样式，而span标签有默认样式
div标签在网页中可以重复使用，而span标签不能重复使用


## css语法
CSS 规则由两个主要的部分构成：选择器，以及一条或多条声明:
![](./CSSimage/csszucheng.png)
选择器通常是您需要改变样式的 HTML 元素
每条声明由一个属性和一个值组成
属性是您希望设置的样式属性。每个属性有一个值。属性和值被冒号分开
##### CSS实例
CSS声明总是以分号 ; 结束，声明总以大括号 {} 括起来:
```
p {color:blue;text-align:center;}
```
###### 注释
注释是用来解释你的代码，并且可以随意编辑它，浏览器会忽略它
CSS注释以```/*```开始, 以```*/```结束
快捷键：Ctrl + /
```
/*这是个注释*/
p{
    text-align:center;
    /*这是另一个注释*/
    color:blue;
    font-family:arial;
}
```

## 样式选择器
#### id选择器
HTML元素以id属性来设置id选择器，CSS中id选择器以"#"来定义
```
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>number</title> 
<style>
#para1
{
	text-align:center;
	color:red;
} 
</style>
</head>

<body>
<p id="para1">Hello World!</p>
<p>这个段落不受该样式的影响。</p>
</body>
</html>
```
 **ID属性不要以数字开头，数字开头的ID在 MozillaFirefox 浏览器中不起作用。**
 #### class选择器
 class 选择器用于描述一组元素的样式，class 选择器有别于id选择器，class可以在多个元素中使用。
 class 选择器在 HTML 中以 class 属性表示, 在 CSS 中，类选择器以一个点 . 号显示
 ```
 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>number</title> 
<style>
.center
{
	text-align:center;
}
</style>
</head>

<body>
<h1 class="center">标题居中</h1>
<p class="center">段落居中。</p> 
</body>
</html>
```
你也可以指定特定的 HTML 元素使用 class。
```
p.center{text-align:center;}
```
多个 class 选择器可以使用空格分开
```
.center{ 
         text-align:center; 
    
        }
.color{
         color:blue;
        }
```
**类名的第一个字符不能使用数字！它无法在 Mozilla Firefox 中起作用。**

#### 元素选择器
最常见的 CSS 选择器是元素选择器。换句话说，文档的元素就是最基本的选择器。
如果设置 HTML 的样式，选择器通常将是某个 HTML 元素，比如 p、h1、em、a，甚至可以是 html 本身
```
html {color:black;}
h1 {color:blue;}
h2 {color:silver;}
```
#### 子选择器
子选择器只能选择作为某一元素的最近一级子元素
用法：元素1>元素2 { 样式声明 }

#### 后代选择器
后代选择器又称包含选择器，可以选择父元素里面子元素。
```
        ul li {
            color: pink; 
        }

```
#### 属性选择器
##### 第一种用法
作用：选择含有指定属性的元素。
语法：[属性名]{}
##### 第二种用法
作用：选择含有指定属性及指定属性值的元素。
语法：[属性名=属性值]{}
##### 第三种用法
作用：选择含有指定属性及指定属性之开头的元素。
语法：[属性名^=属性值]{} 
##### 第四种用法
作用：选择含有指定属性及指定属性值结尾的元素。
语法：[属性名$=属性值]
##### 第五种用法
作用：选择含有指定属性，只要含有某个属性值的元素。
语法：[属性值*=属性名]{}
案例：
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>属性选择器</title>
    <style>
        /* 第一种方法：选择含有指定属性的元素。
                语法：[属性名]{} */
        /*选择属性名为title,设置字体颜色红色  */
        [title]{
            color:red;
        }
        /* 第二种用法：选择含有指定属性及指定属性值的元素。
                语法：[属性名=属性值]{} */
        /*选择属性名为title和属性值为ab的元素 ,设置字体颜色绿色 */
        [title=ab]{
            color: green;
        }
        /* 第三种用法：选择含有指定属性及指定属性之开头的元素。
                语法：[属性名^=属性值]{}  */
        /* 选择属性名为title和属性值以ab开头的元素，设置背景色黄色 */
        [title^=ab]{
            background-color: yellow;
        }
        /* 第四种用法：选择含有指定属性及指定属性值结尾的元素。
                语法：[属性名$=属性值] */
        /* 选择属性名为title和属性值以ab结尾的元素，设置字体为30px */
        [title$=ab]{
            font-size: 30px;
        }
        /* 第五种用法：选择含有指定属性，只要含有某个属性值的元素。
                语法：[属性值*=属性名]{} */
        /* 选择属性名为title和属性值含有c的元素，设置背景色为绿色 */
        [title*=c]{
            background-color: green;
        }
    </style>
</head>
<body>
    <h1 title="a">《出塞》</h1>
    <h2 title="ab">唐·王昌龄</h2>
    <p title="abc">秦时明月汉时关，</p>
    <p title="abab">万里长征人未还。</p>
    <p title="c">但使龙城飞将在，</p>
    <p>不教胡马度阴山。</p>
</body>
</html>
```
效果图：
![](./CSSimage/xgt.png)

##### 通配符选择器
通配符选择器常用 '*'号表示，它是所有选择器里作用范围最广的，能匹配页面中所有的元素。
基本语法格式：*{ 属性1：属性值1；属性2：属性值2；}
#####　群组选择器
群组选择器是多个选择器，用逗号分隔。
基本语法格式：选择器1,选择器2,选择器3,……{ 样式声明 }

### CSS创建
插入样式表的方法有三种：
* 外部样式表
* 内部样式表
* 内联样式

#### 外部样式表
当样式需要被应用到很多页面的时候，外部样式表将是理想的选择。使用外部样式表，可以通过更改一个文件来改变整个站点的外观。每个页面使用<link>标签链接到样式表。<link>标签在（文档的）头部
```
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
```
浏览器会从mystyle.css中读到样式声明，并根据它来格式文档
外部样式表可以在任何文本编辑器中进行编辑。文件不能包含任何的 html 标签。样式表应该以 .css 扩展名进行保存
**不要在属性值与单位之间留有空格（如："margin-left: 20 px" ），正确的写法是 "margin-left: 20px"**

#### 内部样式表

当单个文档需要特殊的样式时，就应该使用内部样式表。可以使用```<style> ```标签在文档头部定义内部样式
```
<head>
<style>
hr {color:sienna;}
p {margin-left:20px;}
body {background-image:url("images/back40.gif");}
</style>
</head>
```

#### 内联样式

由于要将表现和内容混杂在一起，内联样式会损失掉样式表的许多优势。
要使用内联样式，你需要在相关的标签内使用样式（style）属性。Style 属性可以包含任何 CSS 属性
```
<p style="color:sienna;margin-left:20px">这是一个段落。</p>
```

### 背景
background-color 	规定要使用的背景颜色。 
background-position 	规定背景图像的位置。 	
background-size 	规定背景图片的尺寸。 	
background-repeat 	规定如何重复背景图像。 	
background-origin 	规定背景图片的定位区域。 	
background-clip 	规定背景的绘制区域。 	


repeat	默认。背景图像将在垂直方向和水平方向重复。
repeat-x	背景图像将在水平方向重复。
repeat-y	背景图像将在垂直方向重复。
no-repeat	背景图像将仅显示一次。
inherit	规定应该从父元素继承 background-repeat 属性的设置。


background-attachment 	规定背景图像是否固定或者随着页面的其余部分滚动。 	
background-image 	规定要使用的背景图像。 

inherit 	规定应该从父元素继承 background 属性的设置。
left top
left center
left bottom
right top
right center
right bottom
center top
center center
center bottom
简写
background: url(images/bg.gif) no-repeat top right
背景图片的滚动

背景图片是否随着内容的滚动而滚动由background-attachment设置

background-attachment:fixed; 固定，不随内容的滚动而滚动

background-attachment:scroll; 滚动，随内容的滚动而滚动

background后面可以加图片也可以加颜色，只能加一种
#### 边框
边框颜色 border-color:#000

边框宽度 border-width:1px;

border-left 设置左边框，一般单独设置左边框样式使用
border-right 设置右边框，一般单独设置右边框样式使用
border-top 设置上边框，一般单独设置上边框样式使用
border-bottom 设置下边框，一般单独设置下边框样式使用,有时可将下边框样式作为css下划线效果应用。


边框样式值如下：
none : 　无边框。与任何指定的border-width值无关
hidden : 　隐藏边框。IE不支持
dotted : 　在MAC平台上IE4+与WINDOWS和UNIX平台上IE5.5+为点线。否则为实线（常用）
dashed : 　在MAC平台上IE4+与WINDOWS和UNIX平台上IE5.5+为虚线。否则为实线（常用）
solid : 　实线边框（常用）
double : 　双线边框。两条单线与其间隔的和等于指定的border-width值

上 右  下左
groove : 　根据border-color的值画3D凹槽
ridge : 　根据border-color的值画菱形边框
inset : 　根据border-color的值画3D凹边
outset : 　根据border-color的值画3D凸边
上 右 下左

简写
border:5px solid red;

#### 文字属性
color:red; 文字颜色 #ffeeees
font-size:12px; 文字大小
font-weight:bolds 文字粗细(bold/normal)
font-family:”宋体”文字字体
font-variant:small-caps小写字母以大写字母显示

#### 文本属性
text-align:center; 文本对齐(right/left/center)
line-height:10px; 行间距(可通过它实现文本的垂直居中)
text-indent:20px; 首行缩进
text-decoration:none;
文本线(none/underline/overline/line-through) underline/overline/line-through; 定义文本上的下划线/上划线/中划线
letter-spacing: 字间距

#### 列表
list-style-type 	设置列表项标记的类型。参阅：list-style-type 中可能的值。
list-style-position 	设置在何处放置列表项标记。参阅：list-style-position 中可能的值。
list-style-image 	使用图像来替换列表项的标记。参阅：list-style-image 中可能的值。
inherit 	规定应该从父元素继承 list-style 属性的值

取值:disc | circle | square | decimal | decimal-leading-zero | lower-roman | upper-roman | lower-greek | lower-latin | upper-latin | armenian | georgian | lower-alpha 

| upper-alpha | none | inherit

        disc: 点
        circle: 圆圈
        square: 正方形
        decimal: 数字
        decimal-leading-zero: 十进制数，不足两位的补齐前导0，例如: 01, 02, 03, ..., 98, 99
        lower-roman: 小写罗马文字，例如: i, ii, iii, iv, v, ...
        upper-roman: 大写罗马文字，例如: I, II, III, IV, V, ...
        lower-greek: 小写希腊字母，例如: α(alpha), β(beta), γ(gamma), ...
        lower-latin: 小写拉丁文，例如: a, b, c, ... z
        upper-latin: 大写拉丁文，例如: A, B, C, ... Z
        armenian: 亚美尼亚数字
        georgian: 乔治亚数字，例如: an, ban, gan, ..., he, tan, in, in-an, ...
        lower-alpha: 小写拉丁文，例如: a, b, c, ... z
        upper-alpha: 大写拉丁文，例如: A, B, C, ... Z
        none: 无(取消所有的list样式)
        inherit:继承




list-style-position 

inside
 
列表项目标记放置在文本以内，且环绕文本根据标记对齐。
 
outside

默认值。保持标记位于文本的左侧。列表项目标记放置在文本以外，且环绕文本不根据标记对齐。
简写
list-style:square inside url('/i/arrow.gif');

#### 超链接
a{text-decoration: none;}
a:link {color:#FF0000;} /* 未访问的链接 */
a:visited {color:#00FF00;} /* 已访问的链接 */
a:hover {color:#FF00FF;} /* 鼠标划过链接 */
a:active {color:#0000FF;} /* 已选中的链接 */
#### 盒子模型
盒子模型的组成部分
外边距（margin）、边框（border）、内边距（padding）、内容（content）四个属性
自身的身高 width height 
内边距 padding
盒子边框 border
与其他盒子的距离 margin 外边距
#### border边框
常见的写法 border:1px solid #foo;
单独属性:
border-widh:
border-style:
dotted 点状虚线
dashed（虚线）
solid（实线）
double（双实线）
border-color(颜色)
#### margin padding
padding:内边距
值：像素/厘米等长度单位、百分比
padding:10px; 上下左右
padding:10px 10px; 上下 左右
padding:10px 10px 10px; 上 左右 下
padding:10px 10px 10px 10px; 上 右 下 左（设置4个点-->顺时针方向）
单独属性

padding-top:
padding-right:
padding-bottom:
padding-left:



当设置内边距的时候会把盒子撑大，为了保持盒子原来的大小，应该高度和宽度进行减小，根据width和height减小

margin 外边距

值：与padding相同

单独属性：与padding相同

外边距合并：两个盒子同时设置了外边距，会进行一个外边距合并

margin
margin:10px  上下左右都会腾出10px出来
margin:0px auto; 居中
#### float 浮动
left  元素向左浮动。
right 元素向右浮动

清除浮动

clear: both;
left
right
一般不用浮动，因为浮动容易使模块变形
#### 块级元素、行内元素
块级元素：

他会独占一行，在默认情况下，其宽度自动填满其父元素的宽度；
块级元素可以设置width、height属性；
块级元素即使设置了宽度也是独占一行，块级元素可以设置margin、padding属性；


行内元素：
行内元素不会独占一行，相邻的行内元素会排列在同一行里，直到行排不下，就自动换行，其宽度随内容而变化；
行内元素的width、height属性则无效；
行内元素的margin、padding属性很奇怪，水平方向的padding-left、padding-rigtht、margin-left、padding-right都会产生边距效果，但是竖直方向的padding-top、padding-bottom、margin-top、margin-bottom却不产生边距效果。

行内元素转换

display:none; 不显示
display:block;变成块级元素
display:inline; 变成行内元素
display:inline-block;以块级元素样式展示，以行级元素样式排列



块级元素(block element）

address 地址
center 举中对齐块
div- 常用块级容易
dl 定义列表
form 交互表单 （只能用来容纳其它块元素）
h标签
hr 水平分隔线
ol 无需列表
ul有序列表
p 段落
pre 格式化文本


行内元素：

a - 锚点
b - 粗体(不推荐)
br- 换行
code - 计算机代码(在引用源码的时候需要)
em - 强调
i - 斜体
img - 图片（特殊的内联元素，同时是内联替换元素，替换元素可以设置宽高）
当图片和DIV在一起时，图片周围会出现margin现象，即元素不重合贴在一起，为了解决这个问题，设置img的css为{margin：0；display：block；border：0px}
input - 输入框
label - 表格标签
select - 项目选择
strong - 粗体强调
textarea - 多行文本输入框
u - 下划线
var - 定义变量

替换元素有如下：（和img一样的设置方法）

< img>、< input>、< textarea>、< select>
< object>都是替换元素，这些元素都没有实际的内容
### 溢出
overflow 属性规定当内容溢出元素框时发生的事情。
visible	默认值。内容不会被修剪，会呈现在元素框之外。
hidden	内容会被修剪，并且其余内容是不可见的。
scroll	内容会被修剪，但是浏览器会显示滚动条以便查看其余的内容。
auto	如果内容被修剪，则浏览器会显示滚动条以便查看其余的内容。
inherit	规定应该从父元素继承 overflow 属性的值。
### 定位
position
static静态定位（不对它的位置进行改变，在哪里就在那里）

默认值。没有定位，元素出现在正常的流中（忽略 top,bottom, left, right 或者z-index 声明）。
fixed固定定位（参照物--浏览器窗口）---做 弹窗广告用到

生成固定定位的元素，相对于浏览器窗口进行定位。 元素的位置通过 "left", "top", "right"以及 "bottom"属性进行规定。
relative（相对定位 ）（参照物以他本身）

生成相对定位的元素，相对于其正常位置进行定位。
absolute（绝对定位）(除了static都可以，找到参照物-->与它最近的已经有定位的父元素进行定位)

生成绝对定位的元素，相对于 static 定位以外的第一个父元素进行定位。
元素的位置通过 "left", "top", "right" 以及 "bottom" 属性进行规定
###### z-index
z-index 属性设置元素的堆叠顺序。拥有更高堆叠顺序的元素总是会处于堆叠顺序较低的元素的前面。

定位的基本思想: 它允许你定义元素框相对于其正常位置应该出现的位置，或者相对于父元素、另一个元素甚至浏览器窗口本身的位置。
