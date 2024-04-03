<div class="text-justify flex gap-y-6 flex-col px-12 max-w-screen-md">
<h1 class="text-4xl text-left text-[#d30000] font-bold">Sobre Mim:</h1>
    <div class="">
        <p class=" text-xl indent-8">Olá! <br> Sou um profissional em transição de carreira, apaixonado pelo mundo da tecnologia e determinado a seguir uma nova trajetória como desenvolvedor de software. </p>

        <div class="mt-4">
            <ul>
                <li>
                    <div x-data="{ open: false }">
                        <button x-on:click="open = ! open" class="w-full text-start">
                            <h4 :class="open ? 'after:content-arrow-up-b' : 'after:content-arrow-down-b'" class="mt-3 font-bold text-xl text-zinc-950 border-b-2 border-zinc-950 after:w-4 after:h-4 after:absolute ">
                                Formação
                            </h4>
                        </button>
                        <ul x-show="open" x-transition class="my-2 list-disc ml-6 text-wrap">
                            <li>Graduando em Análise e Desenvolvimento de Sistemas - Faculdade Uniavan - Blumenau/SC</li>
                            <li>Curso de PHP - Entra21</li>
                            <li>CC50 - Fundação Estudar</li>
                        </ul>
                    </div>
                </li>
                <li x-data="{ open: false }">
                    <button x-on:click="open = ! open" class="w-full text-start">
                        <h4 :class="open ? 'after:content-arrow-up-b' : 'after:content-arrow-down-b'" class="mt-6 font-bold text-xl text-zinc-950 border-b-2 border-zinc-950 after:w-4 after:h-4 after:absolute">
                            Habilidades
                        </h4>
                    </button>
                    <div class="flex flex-col mt-4">
                        <ul x-show="open" x-transition class="flex justify-around">
                            <li>
                                <div>
                                    <h5 class="text-lg text-[#db0000] border-b-2 border-[#db0000] mb-2">
                                        Hard Skills
                                    </h5>
                                    <div class="ml-3">
                                        <h6 class="text-slate-100 rounded mt-1 bg-zinc-900 inline-block px-2">
                                            Linguagens
                                        </h6>
                                        <ul class="ml-7 list-decimal">
                                            <li>JavaScript</li>
                                            <li>PHP</li>
                                            <li>HTML</li>
                                            <li>CSS</li>
                                            <li>SQL</li>
                                        </ul>
                                    </div>
                                    <div class="ml-3">
                                        <h6 class="text-slate-100 rounded mt-1 bg-zinc-900 inline-block px-2">
                                            Frameworks e Libs
                                        </h6>
                                        <ul class="ml-7 list-decimal">
                                            <li>Laravel</li>
                                            <li>Bootstrap</li>
                                            <li>JQuery</li>
                                            <li>Next JS</li>
                                            <li>React</li>
                                            <li>Tailwind CSS</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                            <div>
                                    <h5 class="text-lg text-[#db0000] border-b-2 border-[#db0000] mb-2">
                                        Soft Skills
                                    </h5>
                                    <ul class="list-disc ml-3">
                                        <li>Resolução de Problemas</li>
                                        <li>Comunicação Efetiva e Acertiva</li>
                                        <li>Adaptabilidade</li>
                                        <li>Organização e Planejamento</li>
                                        <li>Resiliência</li>
                                        <li>Curiosidade e Aprendizado Contínuo</li>
                                        <li>Vontade</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li x-data="{ open: false }">
                    <button x-on:click="open = ! open" class="w-full text-start">
                        <h4 :class="open ? 'after:content-arrow-up-b' : 'after:content-arrow-down-b'" class="mt-4 text-xl text-zinc-950 border-b-2 border-zinc-950 font-bold after:w-4 after:h-4 after:absolute">Hobbies e Vida</h4>
                    </button>
                        <div x-show="open" x-transition>
                        <p class=" font-semibold indent-6 mt-3">
                            Na jornada até aqui adquiri algumas experiências que somaram muito para me tornar quem sou. Minhas <u>Soft Skills</u> basicamente foram formadas pelas experiências em setores administrativos nas empresas que trabalhei; sendo setor financeiro, comercial, logístico e por um momento pedagógico. 
                        </p>
                        <p class=" font-semibold indent-6 mt-3">
                            Dentre essa jornada, adquiri também alguns prazeres, como praticar esportes, ir na natureza, aproveitar rios, cachoeiras e o mar. Construir também foi algo que se mostrou me completar, construir em seu sentindo âmplo, seja aplicações com softwares ou algo material, com madeira, pregos, parafusos, etc...
                        </p> 
                    </div>
                </li>
            </ul>
        </div>


    </div>
</div>