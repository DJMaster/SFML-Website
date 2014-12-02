<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'SoundBuffer.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_83ae1a5e8455fc62607b4936b42116e9.php">sfml</a></li><li class="navelem"><a class="el" href="dir_79a044fa5ec8bbf4af7d440d8995a178.php">sfml</a></li><li class="navelem"><a class="el" href="dir_f3190241575fd2bd132a392ae6942f4a.php">include</a></li><li class="navelem"><a class="el" href="dir_692f376662c82a26cfe4cfa3aceebe24.php">SFML</a></li><li class="navelem"><a class="el" href="dir_3c6cd700807083a0c327f22d879e95e3.php">Audio</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">SoundBuffer.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SOUNDBUFFER_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_SOUNDBUFFER_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/System/Resource.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Audio/AudioResource.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;vector&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;set&gt;</span></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;{</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="keyword">class </span>Sound;</div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;</div>
<div class="line"><a name="l00046"></a><span class="lineno"><a class="code" href="classsf_1_1SoundBuffer.php">   46</a></span>&#160;<span class="keyword">class </span>SFML_API <a class="code" href="classsf_1_1SoundBuffer.php" title="SoundBuffer is the low-level for loading and manipulating sound buffers.">SoundBuffer</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1AudioResource.php" title="Abstract base class for every class that owns a device-dependant resource – allow them to initialize ...">AudioResource</a>, <span class="keyword">public</span> <a class="code" href="classsf_1_1Resource.php" title="Base class for every resource that needs to notify dependent classes about its destruction.">Resource</a>&lt;SoundBuffer&gt;</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;{</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;    <a class="code" href="classsf_1_1SoundBuffer.php" title="SoundBuffer is the low-level for loading and manipulating sound buffers.">SoundBuffer</a>();</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;    <a class="code" href="classsf_1_1SoundBuffer.php" title="SoundBuffer is the low-level for loading and manipulating sound buffers.">SoundBuffer</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1SoundBuffer.php" title="SoundBuffer is the low-level for loading and manipulating sound buffers.">SoundBuffer</a>&amp; Copy);</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;    ~<a class="code" href="classsf_1_1SoundBuffer.php" title="SoundBuffer is the low-level for loading and manipulating sound buffers.">SoundBuffer</a>();</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;    <span class="keywordtype">bool</span> LoadFromFile(<span class="keyword">const</span> std::string&amp; Filename);</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;    <span class="keywordtype">bool</span> LoadFromMemory(<span class="keyword">const</span> <span class="keywordtype">char</span>* Data, std::size_t SizeInBytes);</div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;    <span class="keywordtype">bool</span> LoadFromSamples(<span class="keyword">const</span> Int16* Samples, std::size_t SamplesCount, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> ChannelsCount, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> SampleRate);</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;    <span class="keywordtype">bool</span> SaveToFile(<span class="keyword">const</span> std::string&amp; Filename) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;</div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;    <span class="keyword">const</span> Int16* GetSamples() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;    std::size_t GetSamplesCount() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;</div>
<div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> GetSampleRate() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> GetChannelsCount() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;</div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;    <span class="keywordtype">float</span> GetDuration() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;</div>
<div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;    <a class="code" href="classsf_1_1SoundBuffer.php" title="SoundBuffer is the low-level for loading and manipulating sound buffers.">SoundBuffer</a>&amp; operator =(<span class="keyword">const</span> <a class="code" href="classsf_1_1SoundBuffer.php" title="SoundBuffer is the low-level for loading and manipulating sound buffers.">SoundBuffer</a>&amp; Other);</div>
<div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;</div>
<div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;<span class="keyword">private</span> :</div>
<div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;</div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;    <span class="keyword">friend</span> <span class="keyword">class </span><a class="code" href="classsf_1_1Sound.php" title="Sound defines the properties of a sound such as position, volume, pitch, etc.">Sound</a>;</div>
<div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;</div>
<div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;    <span class="keywordtype">bool</span> Update(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> ChannelsCount, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> SampleRate);</div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;</div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;    <span class="keywordtype">void</span> AttachSound(<a class="code" href="classsf_1_1Sound.php" title="Sound defines the properties of a sound such as position, volume, pitch, etc.">Sound</a>* Instance) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;</div>
<div class="line"><a name="l00194"></a><span class="lineno">  194</span>&#160;    <span class="keywordtype">void</span> DetachSound(<a class="code" href="classsf_1_1Sound.php" title="Sound defines the properties of a sound such as position, volume, pitch, etc.">Sound</a>* Instance) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00195"></a><span class="lineno">  195</span>&#160;</div>
<div class="line"><a name="l00197"></a><span class="lineno">  197</span>&#160;    <span class="comment">// Types</span></div>
<div class="line"><a name="l00199"></a><span class="lineno">  199</span>&#160;<span class="comment"></span>    <span class="keyword">typedef</span> std::set&lt;Sound*&gt; SoundList; </div>
<div class="line"><a name="l00200"></a><span class="lineno">  200</span>&#160;</div>
<div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;<span class="comment"></span>    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>       myBuffer;   </div>
<div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;    std::vector&lt;Int16&gt; mySamples;  </div>
<div class="line"><a name="l00206"></a><span class="lineno">  206</span>&#160;    <span class="keywordtype">float</span>              myDuration; </div>
<div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;    <span class="keyword">mutable</span> SoundList  mySounds;   </div>
<div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;};</div>
<div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;</div>
<div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;</div>
<div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;</div>
<div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;<span class="preprocessor">#endif // SFML_SOUNDBUFFER_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>