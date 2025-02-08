<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <div class="row">
                <div class="col-md-4 text-center">
                <img src="{{ asset('pikot.jpeg') }}" class="rounded-circle img-fluid" alt="Profile Picture">
                </div>
                <div class="col-md-8">
                    <h1 class="mb-3">Renz Louie Besande</h1>
                    <p><strong>Location:</strong> Tampoong, Sogod, Southern Leyte</p>
                    <p><strong>Field of Study:</strong> BS Information Technology 3D</p>
                    <p><strong>Career Goal:</strong> Software Developer</p>
                    <p><strong>Skills:</strong></p>
                    <ul>
                        <li>Programming (C#, C, Java, PHP)</li>
                        <li>Databases (MySQL Workbench)</li>
                    </ul>
                    <p><strong>Hobbies:</strong> Playing guitar, singing, online gaming, listening to music, exercising</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <h2>Contact Me</h2>
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Write your message here"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="container mt-5">
        <h2>Product Table</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <!-- Electronics -->
                <tr><td>1</td><td>Apple iPhone 14</td><td>₱55,990</td><td>50</td></tr>
                <tr><td>2</td><td>Samsung Galaxy S23</td><td>₱49,990</td><td>30</td></tr>
                <tr><td>3</td><td>MacBook Pro 16"</td><td>₱139,990</td><td>15</td></tr>
                <tr><td>4</td><td>HP Pavilion Laptop</td><td>₱44,990</td><td>25</td></tr>
                <tr><td>5</td><td>Dell XPS 13</td><td>₱61,990</td><td>20</td></tr>
                <tr><td>6</td><td>Logitech MX Master 3</td><td>₱5,590</td><td>40</td></tr>
                <tr><td>7</td><td>Razer BlackWidow Keyboard</td><td>₱7,290</td><td>35</td></tr>
                <tr><td>8</td><td>JBL Flip 6 Speaker</td><td>₱5,590</td><td>50</td></tr>
                <tr><td>9</td><td>Sony WH-1000XM5</td><td>₱19,590</td><td>45</td></tr>
                <tr><td>10</td><td>Amazon Echo Dot</td><td>₱2,790</td><td>60</td></tr>

                <!-- Groceries -->
                <tr><td>11</td><td>Coca-Cola 1L Bottle</td><td>₱65</td><td>100</td></tr>
                <tr><td>12</td><td>Lay's Classic Chips</td><td>₱99</td><td>75</td></tr>
                <tr><td>13</td><td>Oreo Cookies</td><td>₱95</td><td>90</td></tr>
                <tr><td>14</td><td>Kellogg's Corn Flakes</td><td>₱199</td><td>50</td></tr>
                <tr><td>15</td><td>Nutella 350g</td><td>₱299</td><td>40</td></tr>

                <!-- Office Supplies -->
                <tr><td>16</td><td>HP Printer Ink Cartridge</td><td>₱1,890</td><td>30</td></tr>
                <tr><td>17</td><td>Stapler with 1000 Staples</td><td>₱399</td><td>45</td></tr>
                <tr><td>18</td><td>Pack of A4 Printing Paper</td><td>₱299</td><td>60</td></tr>
                <tr><td>19</td><td>Pilot G2 Gel Pens (5-pack)</td><td>₱499</td><td>70</td></tr>
                <tr><td>20</td><td>3M Post-it Notes</td><td>₱179</td><td>85</td></tr>

                <!-- Home Appliances -->
                <tr><td>21</td><td>Dyson V11 Vacuum Cleaner</td><td>₱33,990</td><td>10</td></tr>
                <tr><td>22</td><td>Philips Air Fryer</td><td>₱8,490</td><td>15</td></tr>
                <tr><td>23</td><td>Instant Pot 7-in-1</td><td>₱5,590</td><td>20</td></tr>
                <tr><td>24</td><td>LG 65" OLED TV</td><td>₱119,990</td><td>5</td></tr>
                <tr><td>25</td><td>Whirlpool Refrigerator</td><td>₱66,990</td><td>8</td></tr>

                <!-- Clothing -->
                <tr><td>26</td><td>Nike Air Max Shoes</td><td>₱5,995</td><td>30</td></tr>
                <tr><td>27</td><td>Levi's 501 Jeans</td><td>₱2,995</td><td>40</td></tr>
                <tr><td>28</td><td>Uniqlo T-Shirt</td><td>₱590</td><td>100</td></tr>
                <tr><td>29</td><td>Adidas Running Shorts</td><td>₱1,495</td><td>45</td></tr>
                <tr><td>30</td><td>H&M Dress</td><td>₱1,290</td><td>35</td></tr>

                <!-- Beauty Products -->
                <tr><td>31</td><td>MAC Lipstick</td><td>₱1,200</td><td>50</td></tr>
                <tr><td>32</td><td>L'Oreal Face Cream</td><td>₱899</td><td>40</td></tr>
                <tr><td>33</td><td>Dove Body Wash</td><td>₱199</td><td>80</td></tr>
                <tr><td>34</td><td>Nivea Deodorant</td><td>₱129</td><td>100</td></tr>
                <tr><td>35</td><td>Head & Shoulders Shampoo</td><td>₱249</td><td>75</td></tr>

                <!-- Sports Equipment -->
                <tr><td>36</td><td>Basketball</td><td>₱999</td><td>30</td></tr>
                <tr><td>37</td><td>Yoga Mat</td><td>₱799</td><td>40</td></tr>
                <tr><td>38</td><td>Dumbbells Set</td><td>₱2,499</td><td>25</td></tr>
                <tr><td>39</td><td>Tennis Racket</td><td>₱1,999</td><td>20</td></tr>
                <tr><td>40</td><td>Swimming Goggles</td><td>₱399</td><td>50</td></tr>

                <!-- Books and Stationery -->
                <tr><td>41</td><td>Harry Potter Book Set</td><td>₱3,999</td><td>15</td></tr>
                <tr><td>42</td><td>Notebook Set</td><td>₱299</td><td>100</td></tr>
                <tr><td>43</td><td>Colored Pencils</td><td>₱199</td><td>80</td></tr>
                <tr><td>44</td><td>Art Sketchbook</td><td>₱399</td><td>45</td></tr>
                <tr><td>45</td><td>Dictionary</td><td>₱599</td><td>30</td></tr>

                <!-- Kitchen Items -->
                <tr><td>46</td><td>Non-stick Pan Set</td><td>₱2,499</td><td>25</td></tr>
                <tr><td>47</td><td>Kitchen Knife Set</td><td>₱1,999</td><td>30</td></tr>
                <tr><td>48</td><td>Coffee Maker</td><td>₱3,999</td><td>20</td></tr>
                <tr><td>49</td><td>Food Container Set</td><td>₱799</td><td>50</td></tr>
                <tr><td>50</td><td>Blender</td><td>₱2,999</td><td>25</td></tr>

                <!-- Gaming -->
                <tr><td>51</td><td>PlayStation 5</td><td>₱29,990</td><td>10</td></tr>
                <tr><td>52</td><td>Nintendo Switch</td><td>₱16,995</td><td>15</td></tr>
                <tr><td>53</td><td>Xbox Controller</td><td>₱3,495</td><td>30</td></tr>
                <tr><td>54</td><td>Gaming Headset</td><td>₱2,995</td><td>40</td></tr>
                <tr><td>55</td><td>Gaming Chair</td><td>₱8,995</td><td>20</td></tr>

                <!-- Home Decor -->
                <tr><td>56</td><td>Wall Clock</td><td>₱999</td><td>40</td></tr>
                <tr><td>57</td><td>Photo Frame Set</td><td>₱799</td><td>50</td></tr>
                <tr><td>58</td><td>Table Lamp</td><td>₱1,299</td><td>35</td></tr>
                <tr><td>59</td><td>Throw Pillows</td><td>₱499</td><td>60</td></tr>
                <tr><td>60</td><td>Area Rug</td><td>₱2,499</td><td>25</td></tr>

                <!-- Pet Supplies -->
                <tr><td>61</td><td>Dog Food (5kg)</td><td>₱999</td><td>40</td></tr>
                <tr><td>62</td><td>Cat Litter Box</td><td>₱799</td><td>30</td></tr>
                <tr><td>63</td><td>Pet Carrier</td><td>₱1,499</td><td>25</td></tr>
                <tr><td>64</td><td>Pet Bed</td><td>₱899</td><td>35</td></tr>
                <tr><td>65</td><td>Pet Toys Set</td><td>₱499</td><td>50</td></tr>

                <!-- Garden Tools -->
                <tr><td>66</td><td>Garden Hose</td><td>₱799</td><td>30</td></tr>
                <tr><td>67</td><td>Plant Pots Set</td><td>₱599</td><td>40</td></tr>
                <tr><td>68</td><td>Gardening Tools Set</td><td>₱1,299</td><td>25</td></tr>
                <tr><td>69</td><td>Watering Can</td><td>₱299</td><td>50</td></tr>
                <tr><td>70</td><td>Garden Gloves</td><td>₱199</td><td>60</td></tr>

                <!-- Automotive -->
                <tr><td>71</td><td>Car Battery</td><td>₱5,999</td><td>15</td></tr>
                <tr><td>72</td><td>Motor Oil</td><td>₱999</td><td>40</td></tr>
                <tr><td>73</td><td>Car Air Freshener</td><td>₱199</td><td>100</td></tr>
                <tr><td>74</td><td>Tire Gauge</td><td>₱299</td><td>50</td></tr>
                <tr><td>75</td><td>Car Wash Kit</td><td>₱899</td><td>30</td></tr>

                <!-- Musical Instruments -->
                <tr><td>76</td><td>Acoustic Guitar</td><td>₱7,999</td><td>10</td></tr>
                <tr><td>77</td><td>Digital Piano</td><td>₱24,999</td><td>5</td></tr>
                <tr><td>78</td><td>Drum Set</td><td>₱19,999</td><td>3</td></tr>
                <tr><td>79</td><td>Violin</td><td>₱8,999</td><td>8</td></tr>
                <tr><td>80</td><td>Guitar Strings Set</td><td>₱399</td><td>50</td></tr>

                <!-- Tools -->
                <tr><td>81</td><td>Power Drill</td><td>₱3,999</td><td>20</td></tr>
                <tr><td>82</td><td>Toolbox Set</td><td>₱2,499</td><td>25</td></tr>
                <tr><td>83</td><td>Measuring Tape</td><td>₱199</td><td>60</td></tr>
                <tr><td>84</td><td>Hammer</td><td>₱399</td><td>40</td></tr>
                <tr><td>85</td><td>Screwdriver Set</td><td>₱799</td><td>35</td></tr>

                <!-- More Electronics -->
                <tr><td>86</td><td>Smart Watch</td><td>₱9,999</td><td>25</td></tr>
                <tr><td>87</td><td>Wireless Earbuds</td><td>₱4,999</td><td>40</td></tr>
                <tr><td>88</td><td>Power Bank</td><td>₱1,499</td><td>50</td></tr>
                <tr><td>89</td><td>USB Flash Drive</td><td>₱499</td><td>75</td></tr>
                <tr><td>90</td><td>Webcam</td><td>₱2,499</td><td>30</td></tr>

                <!-- Toys -->
                <tr><td>91</td><td>LEGO Set</td><td>₱2,999</td><td>20</td></tr>
                <tr><td>92</td><td>Remote Control Car</td><td>₱1,999</td><td>25</td></tr>
                <tr><td>93</td><td>Doll Set</td><td>₱999</td><td>30</td></tr>
                <tr><td>94</td><td>Board Game</td><td>₱799</td><td>40</td></tr>
                <tr><td>95</td><td>Puzzle Set</td><td>₱499</td><td>50</td></tr>

                <!-- Fitness Equipment -->
                <tr><td>96</td><td>Treadmill</td><td>₱29,999</td><td><!-- Continuing Fitness Equipment -->
                <tr><td>96</td><td>Treadmill</td><td>₱29,999</td><td>5</td></tr>
                <tr><td>97</td><td>Exercise Bike</td><td>₱15,999</td><td>8</td></tr>
                <tr><td>98</td><td>Jump Rope</td><td>₱299</td><td>100</td></tr>
                <tr><td>99</td><td>Resistance Bands Set</td><td>₱599</td><td>75</td></tr>
                <tr><td>100</td><td>Yoga Block Set</td><td>₱499</td><td>60</td></tr>

                <!-- Filipino Food Items -->
                <tr><td>101</td><td>Pancit Canton Pack</td><td>₱15</td><td>200</td></tr>
                <tr><td>102</td><td>San Miguel Beer 6-pack</td><td>₱299</td><td>150</td></tr>
                <tr><td>103</td><td>Mang Tomas Sauce</td><td>₱45</td><td>100</td></tr>
                <tr><td>104</td><td>Dried Mangoes Pack</td><td>₱199</td><td>80</td></tr>
                <tr><td>105</td><td>Skyflakes Crackers</td><td>₱59</td><td>150</td></tr>

                <!-- Local Snacks -->
                <tr><td>106</td><td>Chicharon Pack</td><td>₱99</td><td>120</td></tr>
                <tr><td>107</td><td>Boy Bawang Cornick</td><td>₱29</td><td>200</td></tr>
                <tr><td>108</td><td>Piattos Chips</td><td>₱25</td><td>180</td></tr>
                <tr><td>109</td><td>Nova Multigrain Snacks</td><td>₱35</td><td>150</td></tr>
                <tr><td>110</td><td>Nagaraya Nuts</td><td>₱45</td><td>160</td></tr>

                <!-- School Supplies -->
                <tr><td>111</td><td>Scientific Calculator</td><td>₱999</td><td>40</td></tr>
                <tr><td>112</td><td>School Backpack</td><td>₱1,299</td><td>35</td></tr>
                <tr><td>113</td><td>Lunch Box Set</td><td>₱399</td><td>50</td></tr>
                <tr><td>114</td><td>Water Bottle</td><td>₱299</td><td>75</td></tr>
                <tr><td>115</td><td>Art Materials Set</td><td>₱599</td><td>45</td></tr>

                <!-- Personal Care -->
                <tr><td>116</td><td>Electric Toothbrush</td><td>₱2,499</td><td>30</td></tr>
                <tr><td>117</td><td>Hair Dryer</td><td>₱1,499</td><td>40</td></tr>
                <tr><td>118</td><td>Face Mask Pack</td><td>₱199</td><td>100</td></tr>
                <tr><td>119</td><td>Nail Care Kit</td><td>₱399</td><td>55</td></tr>
                <tr><td>120</td><td>Electric Razor</td><td>₱1,999</td><td>35</td></tr>

                <!-- Local Accessories -->
                <tr><td>121</td><td>Handwoven Bag</td><td>₱899</td><td>40</td></tr>
                <tr><td>122</td><td>Bamboo Sunglasses</td><td>₱599</td><td>50</td></tr>
                <tr><td>123</td><td>Shell Necklace</td><td>₱299</td><td>60</td></tr>
                <tr><td>124</td><td>Wooden Bracelet</td><td>₱199</td><td>75</td></tr>
                <tr><td>125</td><td>Woven Hat</td><td>₱399</td><td>45</td></tr>

                <!-- Home Storage -->
                <tr><td>126</td><td>Storage Box Set</td><td>₱799</td><td>40</td></tr>
                <tr><td>127</td><td>Clothes Hangers Pack</td><td>₱299</td><td>80</td></tr>
                <tr><td>128</td><td>Shoe Rack</td><td>₱999</td><td>30</td></tr>
                <tr><td>129</td><td>Drawer Organizer</td><td>₱399</td><td>60</td></tr>
                <tr><td>130</td><td>Laundry Basket</td><td>₱499</td><td>45</td></tr>

                <!-- Smart Home -->
                <tr><td>131</td><td>Smart Light Bulb</td><td>₱699</td><td>50</td></tr>
                <tr><td>132</td><td>WiFi Security Camera</td><td>₱2,999</td><td>25</td></tr>
                <tr><td>133</td><td>Smart Doorbell</td><td>₱3,499</td><td>20</td></tr>
                <tr><td>134</td><td>Smart Switch</td><td>₱899</td><td>40</td></tr>
                <tr><td>135</td><td>Motion Sensor</td><td>₱799</td><td>35</td></tr>

                <!-- Mobile Accessories -->
                <tr><td>136</td><td>Phone Case</td><td>₱499</td><td>100</td></tr>
                <tr><td>137</td><td>Screen Protector</td><td>₱299</td><td>150</td></tr>
                <tr><td>138</td><td>Car Phone Mount</td><td>₱599</td><td>60</td></tr>
                <tr><td>139</td><td>Selfie Stick</td><td>₱399</td><td>70</td></tr>
                <tr><td>140</td><td>Phone Ring Holder</td><td>₱199</td><td>120</td></tr>

                <!-- Travel Items -->
                <tr><td>141</td><td>Travel Adapter</td><td>₱799</td><td>45</td></tr>
                <tr><td>142</td><td>Neck Pillow</td><td>₱399</td><td>60</td></tr>
                <tr><td>143</td><td>Luggage Tag Set</td><td>₱199</td><td>80</td></tr>
                <tr><td>144</td><td>Travel Toiletry Kit</td><td>₱599</td><td>50</td></tr>
                <tr><td>145</td><td>Passport Holder</td><td>₱299</td><td>70</td></tr>

                <!-- Traditional Items -->
                <tr><td>146</td><td>Barong Tagalog</td><td>₱2,999</td><td>20</td></tr>
                <tr><td>147</td><td>Banig Mat</td><td>₱599</td><td>40</td></tr>
                <tr><td>148</td><td>Wooden Tinikling Set</td><td>₱1,499</td><td>15</td></tr>
                <tr><td>149</td><td>Bamboo Wind Chimes</td><td>₱399</td><td>50</td></tr>
                <tr><td>150</td><td>Traditional Fan</td><td>₱299</td><td>75</td></tr>
            </tbody>
        </table>
    </div>
</body>
</html>
