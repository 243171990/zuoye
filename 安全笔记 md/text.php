<?php 
    class MyClass {
        // 类的属性
        public $property;
    
        // 构造方法，用于初始化属性
        public function __construct($value) {
            $this->property = $value;
        }
    
        // 一个方法，用于输出属性的值
        public function displayProperty() {
            echo "The value of the property is: " . $this->property;
        }
    
        // 另一个方法，用于设置属性的值
        public function setProperty($value) {
            $this->property = $value;
        }
    }
    
    // 创建类的实例，并传入初始值
    $myObject = new MyClass("Initial value");
    
    // 调用类的方法，显示属性的值
    $myObject->displayProperty(); // 输出: The value of the property is: Initial value
    
    // 调用类的方法，设置新的属性值
    $myObject->setProperty("New value");
    
    // 再次调用类的方法，显示更新后的属性值
    $myObject->displayProperty(); // 输出: The value of the property is: New value
?>