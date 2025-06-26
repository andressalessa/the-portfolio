<footer class="space-y-1 pt-[120px] bg-[url('/assets/Background_Contacts.png')] bg-cover bg-center h-screen">
    <div class="flex justify-center">
        <p class="font-inconsolata mt-10 text-xl text-purple-400">Contato
        </p>
    </div>
    <div class="flex justify-center">
        <p class="font-asap font-black text-2xl">Gostou do meu trabalho?</p>
    </div>
    <div class="flex justify-center">
        <p class="font-maven text-center text-gray-400 text-md">
            Entre em contato ou acompanhe as minhas redes sociais!
        </p>
    </div>
    <!-- 
        O group determina que o container pai será o grupo de hover 
        e aí é possível usar no filho que desejar receber o comportamento quando o pai for hover o group-hover 
    -->
    <div class="flex flex-col items-center gap-4 pt-4">
        <?php include('./components/social-buttons.php') ?>
    </div>
</footer>