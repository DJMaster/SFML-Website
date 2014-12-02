<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Image.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
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
<div class="title">Image.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_IMAGE_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_IMAGE_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/System/Resource.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Color.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Rect.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;vector&gt;</span></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;{</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="keyword">class </span>RenderWindow;</div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;</div>
<div class="line"><a name="l00046"></a><span class="lineno"><a class="code" href="classsf_1_1Image.php">   46</a></span>&#160;<span class="keyword">class </span>SFML_API <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1Resource.php" title="Base class for every resource that needs to notify dependent classes about its destruction.">Resource</a>&lt;Image&gt;</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;{</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;    <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>();</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;    <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>&amp; Copy);</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;    <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Width, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Height, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; Col = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>(0, 0, 0, 255));</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;    <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Width, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Height, <span class="keyword">const</span> Uint8* Data);</div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;    ~<a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>();</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;    <span class="keywordtype">bool</span> LoadFromFile(<span class="keyword">const</span> std::string&amp; Filename);</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;    <span class="keywordtype">bool</span> LoadFromMemory(<span class="keyword">const</span> <span class="keywordtype">char</span>* Data, std::size_t SizeInBytes);</div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;</div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;    <span class="keywordtype">bool</span> LoadFromPixels(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Width, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Height, <span class="keyword">const</span> Uint8* Data);</div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;</div>
<div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;    <span class="keywordtype">bool</span> SaveToFile(<span class="keyword">const</span> std::string&amp; Filename) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;</div>
<div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;    <span class="keywordtype">bool</span> Create(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Width, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Height, <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a> Col = <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>(0, 0, 0, 255));</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;</div>
<div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;    <span class="keywordtype">void</span> CreateMaskFromColor(<a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a> ColorKey, Uint8 Alpha = 0);</div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;</div>
<div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;    <span class="keywordtype">void</span> Copy(<span class="keyword">const</span> <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>&amp; Source, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> DestX, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> DestY, <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; SourceRect = <a class="code" href="classsf_1_1Rect.php">IntRect</a>(0, 0, 0, 0), <span class="keywordtype">bool</span> ApplyAlpha = <span class="keyword">false</span>);</div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;</div>
<div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;    <span class="keywordtype">bool</span> CopyScreen(<a class="code" href="classsf_1_1RenderWindow.php" title="Simple wrapper for sf::Window that allows easy 2D rendering.">RenderWindow</a>&amp; <a class="code" href="classsf_1_1Window.php" title="Window is a rendering window ; it can create a new window or connect to an existing one...">Window</a>, <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; SourceRect = <a class="code" href="classsf_1_1Rect.php">IntRect</a>(0, 0, 0, 0));</div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;</div>
<div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;    <span class="keywordtype">void</span> SetPixel(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> X, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Y, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; Col);</div>
<div class="line"><a name="l00189"></a><span class="lineno">  189</span>&#160;</div>
<div class="line"><a name="l00199"></a><span class="lineno">  199</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php" title="Color is an utility class for manipulating 32-bits RGBA colors.">Color</a>&amp; GetPixel(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> X, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Y) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00200"></a><span class="lineno">  200</span>&#160;</div>
<div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;    <span class="keyword">const</span> Uint8* GetPixelsPtr() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;</div>
<div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;    <span class="keywordtype">void</span> Bind() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;</div>
<div class="line"><a name="l00224"></a><span class="lineno">  224</span>&#160;    <span class="keywordtype">void</span> SetSmooth(<span class="keywordtype">bool</span> Smooth);</div>
<div class="line"><a name="l00225"></a><span class="lineno">  225</span>&#160;</div>
<div class="line"><a name="l00232"></a><span class="lineno">  232</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> GetWidth() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00233"></a><span class="lineno">  233</span>&#160;</div>
<div class="line"><a name="l00240"></a><span class="lineno">  240</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> GetHeight() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00241"></a><span class="lineno">  241</span>&#160;</div>
<div class="line"><a name="l00248"></a><span class="lineno">  248</span>&#160;    <span class="keywordtype">bool</span> IsSmooth() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00249"></a><span class="lineno">  249</span>&#160;</div>
<div class="line"><a name="l00259"></a><span class="lineno">  259</span>&#160;    <a class="code" href="classsf_1_1Rect.php">FloatRect</a> GetTexCoords(<span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; <a class="code" href="classsf_1_1Rect.php" title="Rect is an utility class for manipulating rectangles.">Rect</a>) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00260"></a><span class="lineno">  260</span>&#160;</div>
<div class="line"><a name="l00269"></a><span class="lineno">  269</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> GetValidTextureSize(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Size);</div>
<div class="line"><a name="l00270"></a><span class="lineno">  270</span>&#160;</div>
<div class="line"><a name="l00279"></a><span class="lineno">  279</span>&#160;    <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>&amp; operator =(<span class="keyword">const</span> <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>&amp; Other);</div>
<div class="line"><a name="l00280"></a><span class="lineno">  280</span>&#160;</div>
<div class="line"><a name="l00281"></a><span class="lineno">  281</span>&#160;<span class="keyword">private</span> :</div>
<div class="line"><a name="l00282"></a><span class="lineno">  282</span>&#160;</div>
<div class="line"><a name="l00289"></a><span class="lineno">  289</span>&#160;    <span class="keywordtype">bool</span> CreateTexture();</div>
<div class="line"><a name="l00290"></a><span class="lineno">  290</span>&#160;</div>
<div class="line"><a name="l00295"></a><span class="lineno">  295</span>&#160;    <span class="keywordtype">void</span> EnsureTextureUpdate() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00296"></a><span class="lineno">  296</span>&#160;</div>
<div class="line"><a name="l00301"></a><span class="lineno">  301</span>&#160;    <span class="keywordtype">void</span> EnsureArrayUpdate() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00302"></a><span class="lineno">  302</span>&#160;</div>
<div class="line"><a name="l00307"></a><span class="lineno">  307</span>&#160;    <span class="keywordtype">void</span> Reset();</div>
<div class="line"><a name="l00308"></a><span class="lineno">  308</span>&#160;</div>
<div class="line"><a name="l00313"></a><span class="lineno">  313</span>&#160;    <span class="keywordtype">void</span> DestroyTexture();</div>
<div class="line"><a name="l00314"></a><span class="lineno">  314</span>&#160;</div>
<div class="line"><a name="l00316"></a><span class="lineno">  316</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00318"></a><span class="lineno">  318</span>&#160;<span class="comment"></span>    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>               myWidth;             </div>
<div class="line"><a name="l00319"></a><span class="lineno">  319</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>               myHeight;            </div>
<div class="line"><a name="l00320"></a><span class="lineno">  320</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>               myTextureWidth;      </div>
<div class="line"><a name="l00321"></a><span class="lineno">  321</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>               myTextureHeight;     </div>
<div class="line"><a name="l00322"></a><span class="lineno">  322</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>               myTexture;           </div>
<div class="line"><a name="l00323"></a><span class="lineno">  323</span>&#160;    <span class="keywordtype">bool</span>                       myIsSmooth;          </div>
<div class="line"><a name="l00324"></a><span class="lineno">  324</span>&#160;    <span class="keyword">mutable</span> std::vector&lt;Color&gt; myPixels;            </div>
<div class="line"><a name="l00325"></a><span class="lineno">  325</span>&#160;    <span class="keyword">mutable</span> <span class="keywordtype">bool</span>               myNeedTextureUpdate; </div>
<div class="line"><a name="l00326"></a><span class="lineno">  326</span>&#160;    <span class="keyword">mutable</span> <span class="keywordtype">bool</span>               myNeedArrayUpdate;   </div>
<div class="line"><a name="l00327"></a><span class="lineno">  327</span>&#160;};</div>
<div class="line"><a name="l00328"></a><span class="lineno">  328</span>&#160;</div>
<div class="line"><a name="l00329"></a><span class="lineno">  329</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00330"></a><span class="lineno">  330</span>&#160;</div>
<div class="line"><a name="l00331"></a><span class="lineno">  331</span>&#160;</div>
<div class="line"><a name="l00332"></a><span class="lineno">  332</span>&#160;<span class="preprocessor">#endif // SFML_IMAGE_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>