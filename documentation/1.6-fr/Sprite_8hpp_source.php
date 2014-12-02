<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Sprite.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_83ae1a5e8455fc62607b4936b42116e9.php">sfml</a></li><li class="navelem"><a class="el" href="dir_79a044fa5ec8bbf4af7d440d8995a178.php">sfml</a></li><li class="navelem"><a class="el" href="dir_f3190241575fd2bd132a392ae6942f4a.php">include</a></li><li class="navelem"><a class="el" href="dir_692f376662c82a26cfe4cfa3aceebe24.php">SFML</a></li><li class="navelem"><a class="el" href="dir_aaa96c3797a59111c2945d0d638ce5cf.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Sprite.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2009 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SPRITE_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_SPRITE_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/System/Resource.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Drawable.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Rect.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">class </span>Image;</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;</div>
<div class="line"><a name="l00044"></a><span class="lineno"><a class="code" href="classsf_1_1Sprite.php">   44</a></span>&#160;<span class="keyword">class </span>SFML_API <a class="code" href="classsf_1_1Sprite.php" title="Sprite defines a sprite : texture, transformations, color, and draw on screen.">Sprite</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1Drawable.php" title="Abstract base class for every object that can be drawn into a render window.">Drawable</a></div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;{</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;    <a class="code" href="classsf_1_1Sprite.php" title="Sprite defines a sprite : texture, transformations, color, and draw on screen.">Sprite</a>();</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1Sprite.php" title="Sprite defines a sprite : texture, transformations, color, and draw on screen.">Sprite</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>&amp; Img, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; Position = <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>(0, 0), <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; Scale = <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>(1, 1), <span class="keywordtype">float</span> Rotation = 0.f, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; Col = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>(255, 255, 255, 255));</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;    <span class="keywordtype">void</span> SetImage(<span class="keyword">const</span> <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>&amp; Img);</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;    <span class="keywordtype">void</span> SetSubRect(<span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; SubRect);</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;</div>
<div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;    <span class="keywordtype">void</span> Resize(<span class="keywordtype">float</span> Width, <span class="keywordtype">float</span> Height);</div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;    <span class="keywordtype">void</span> Resize(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; Size);</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;    <span class="keywordtype">void</span> FlipX(<span class="keywordtype">bool</span> Flipped);</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;</div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;    <span class="keywordtype">void</span> FlipY(<span class="keywordtype">bool</span> Flipped);</div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;</div>
<div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>* GetImage() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;</div>
<div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; GetSubRect() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;    <a class="code" href="classsf_1_1Vector2.php">Vector2f</a> GetSize() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div>
<div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;    <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a> GetPixel(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> X, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Y) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;</div>
<div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;<span class="keyword">protected</span> :</div>
<div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;</div>
<div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> Render(<a class="code" href="classsf_1_1RenderTarget.php" title="Base class for all render targets (window, image, ...)">RenderTarget</a>&amp; Target) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;</div>
<div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;<span class="keyword">private</span> :</div>
<div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;</div>
<div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1ResourcePtr.php">ResourcePtr&lt;Image&gt;</a> myImage;      </div>
<div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;    <a class="code" href="classsf_1_1Rect.php">IntRect</a>            mySubRect;    </div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;    <span class="keywordtype">bool</span>               myIsFlippedX; </div>
<div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;    <span class="keywordtype">bool</span>               myIsFlippedY; </div>
<div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;};</div>
<div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;</div>
<div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;</div>
<div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;</div>
<div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;<span class="preprocessor">#endif // SFML_SPRITE_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>