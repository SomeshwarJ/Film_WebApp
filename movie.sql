PGDMP                          z            movies    14.1    14.1 %    +           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ,           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            -           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            .           1262    16556    movies    DATABASE     b   CREATE DATABASE movies WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
    DROP DATABASE movies;
                postgres    false            �            1255    16713    insert_actor()    FUNCTION     �   CREATE FUNCTION public.insert_actor() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
begin
insert into movie_cast(mov_id) values (new.mov_id);
return new;
end;
$$;
 %   DROP FUNCTION public.insert_actor();
       public          postgres    false            �            1259    16584    actor    TABLE     �   CREATE TABLE public.actor (
    act_id integer DEFAULT (((random() * (900)::double precision) + (100)::double precision))::integer NOT NULL,
    act_name character varying(200),
    ctype character varying(200)
);
    DROP TABLE public.actor;
       public         heap    postgres    false            �            1259    16715 	   celebrity    TABLE     �   CREATE TABLE public.celebrity (
    cid integer DEFAULT (((random() * (900)::double precision) + (100)::double precision))::integer NOT NULL,
    cname character varying(255),
    ctype character varying(255)
);
    DROP TABLE public.celebrity;
       public         heap    postgres    false            �            1259    24955    contact    TABLE     �   CREATE TABLE public.contact (
    username character varying(200),
    email character varying(200),
    subject character varying(200)
);
    DROP TABLE public.contact;
       public         heap    postgres    false            �            1259    16571 	   direction    TABLE     J   CREATE TABLE public.direction (
    mov_id integer,
    dir_id integer
);
    DROP TABLE public.direction;
       public         heap    postgres    false            �            1259    16566    director    TABLE     �   CREATE TABLE public.director (
    dir_id integer DEFAULT (((random() * (900)::double precision) + (100)::double precision))::integer NOT NULL,
    dir_name character varying(200),
    ctype character varying(200)
);
    DROP TABLE public.director;
       public         heap    postgres    false            �            1259    16602    login    TABLE     �   CREATE TABLE public.login (
    username character varying(200),
    email character varying(200) NOT NULL,
    pass character varying(200),
    profile character varying(255)
);
    DROP TABLE public.login;
       public         heap    postgres    false            �            1259    16557    movie    TABLE     �  CREATE TABLE public.movie (
    mov_id integer DEFAULT (((random() * (900)::double precision) + (100)::double precision))::integer NOT NULL,
    mov_name character varying(200) NOT NULL,
    genre character varying(200) NOT NULL,
    mov_date character varying(200) NOT NULL,
    des character varying(4000) NOT NULL,
    runtime character varying(10) NOT NULL,
    lang character varying(20) NOT NULL,
    cover_pic character varying(200) NOT NULL,
    poster character varying(200) NOT NULL,
    youtube character varying(200) NOT NULL,
    image1 character varying(200) NOT NULL,
    image2 character varying(200) NOT NULL,
    image3 character varying(200) NOT NULL
);
    DROP TABLE public.movie;
       public         heap    postgres    false            �            1259    16589 
   movie_cast    TABLE     K   CREATE TABLE public.movie_cast (
    act_id integer,
    mov_id integer
);
    DROP TABLE public.movie_cast;
       public         heap    postgres    false            �            1259    16611    rating    TABLE     �   CREATE TABLE public.rating (
    email character varying(200),
    mov_id integer,
    stars integer,
    review character varying(2000),
    "time" character varying(2000)
);
    DROP TABLE public.rating;
       public         heap    postgres    false            #          0    16584    actor 
   TABLE DATA           8   COPY public.actor (act_id, act_name, ctype) FROM stdin;
    public          postgres    false    212   u+       '          0    16715 	   celebrity 
   TABLE DATA           6   COPY public.celebrity (cid, cname, ctype) FROM stdin;
    public          postgres    false    216   �.       (          0    24955    contact 
   TABLE DATA           ;   COPY public.contact (username, email, subject) FROM stdin;
    public          postgres    false    217    0       "          0    16571 	   direction 
   TABLE DATA           3   COPY public.direction (mov_id, dir_id) FROM stdin;
    public          postgres    false    211   Z0       !          0    16566    director 
   TABLE DATA           ;   COPY public.director (dir_id, dir_name, ctype) FROM stdin;
    public          postgres    false    210   Q1       %          0    16602    login 
   TABLE DATA           ?   COPY public.login (username, email, pass, profile) FROM stdin;
    public          postgres    false    214   F3                  0    16557    movie 
   TABLE DATA           �   COPY public.movie (mov_id, mov_name, genre, mov_date, des, runtime, lang, cover_pic, poster, youtube, image1, image2, image3) FROM stdin;
    public          postgres    false    209   �3       $          0    16589 
   movie_cast 
   TABLE DATA           4   COPY public.movie_cast (act_id, mov_id) FROM stdin;
    public          postgres    false    213   �e       &          0    16611    rating 
   TABLE DATA           F   COPY public.rating (email, mov_id, stars, review, "time") FROM stdin;
    public          postgres    false    215   �g       �           2606    16588    actor actor_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.actor
    ADD CONSTRAINT actor_pkey PRIMARY KEY (act_id);
 :   ALTER TABLE ONLY public.actor DROP CONSTRAINT actor_pkey;
       public            postgres    false    212            �           2606    16721    celebrity celebrity_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.celebrity
    ADD CONSTRAINT celebrity_pkey PRIMARY KEY (cid);
 B   ALTER TABLE ONLY public.celebrity DROP CONSTRAINT celebrity_pkey;
       public            postgres    false    216            �           2606    16570    director director_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.director
    ADD CONSTRAINT director_pkey PRIMARY KEY (dir_id);
 @   ALTER TABLE ONLY public.director DROP CONSTRAINT director_pkey;
       public            postgres    false    210            �           2606    16608    login login_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY public.login
    ADD CONSTRAINT login_pkey PRIMARY KEY (email);
 :   ALTER TABLE ONLY public.login DROP CONSTRAINT login_pkey;
       public            postgres    false    214            �           2606    16610    login login_username_key 
   CONSTRAINT     W   ALTER TABLE ONLY public.login
    ADD CONSTRAINT login_username_key UNIQUE (username);
 B   ALTER TABLE ONLY public.login DROP CONSTRAINT login_username_key;
       public            postgres    false    214            �           2606    16565    movie movie_mov_name_key 
   CONSTRAINT     W   ALTER TABLE ONLY public.movie
    ADD CONSTRAINT movie_mov_name_key UNIQUE (mov_name);
 B   ALTER TABLE ONLY public.movie DROP CONSTRAINT movie_mov_name_key;
       public            postgres    false    209            �           2606    16563    movie movie_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.movie
    ADD CONSTRAINT movie_pkey PRIMARY KEY (mov_id);
 :   ALTER TABLE ONLY public.movie DROP CONSTRAINT movie_pkey;
       public            postgres    false    209            �           2620    16714    movie insert_actor    TRIGGER     n   CREATE TRIGGER insert_actor AFTER INSERT ON public.movie FOR EACH ROW EXECUTE FUNCTION public.insert_actor();
 +   DROP TRIGGER insert_actor ON public.movie;
       public          postgres    false    209    218            �           2606    16579    direction direction_dir_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.direction
    ADD CONSTRAINT direction_dir_id_fkey FOREIGN KEY (dir_id) REFERENCES public.director(dir_id);
 I   ALTER TABLE ONLY public.direction DROP CONSTRAINT direction_dir_id_fkey;
       public          postgres    false    210    211    3205            �           2606    16574    direction direction_mov_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.direction
    ADD CONSTRAINT direction_mov_id_fkey FOREIGN KEY (mov_id) REFERENCES public.movie(mov_id);
 I   ALTER TABLE ONLY public.direction DROP CONSTRAINT direction_mov_id_fkey;
       public          postgres    false    211    209    3203            �           2606    16592 !   movie_cast movie_cast_act_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.movie_cast
    ADD CONSTRAINT movie_cast_act_id_fkey FOREIGN KEY (act_id) REFERENCES public.actor(act_id);
 K   ALTER TABLE ONLY public.movie_cast DROP CONSTRAINT movie_cast_act_id_fkey;
       public          postgres    false    213    212    3207            �           2606    16597 !   movie_cast movie_cast_mov_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.movie_cast
    ADD CONSTRAINT movie_cast_mov_id_fkey FOREIGN KEY (mov_id) REFERENCES public.movie(mov_id);
 K   ALTER TABLE ONLY public.movie_cast DROP CONSTRAINT movie_cast_mov_id_fkey;
       public          postgres    false    209    213    3203            �           2606    16616    rating rating_email_fkey    FK CONSTRAINT     x   ALTER TABLE ONLY public.rating
    ADD CONSTRAINT rating_email_fkey FOREIGN KEY (email) REFERENCES public.login(email);
 B   ALTER TABLE ONLY public.rating DROP CONSTRAINT rating_email_fkey;
       public          postgres    false    214    3209    215            �           2606    16621    rating rating_mov_id_fkey    FK CONSTRAINT     {   ALTER TABLE ONLY public.rating
    ADD CONSTRAINT rating_mov_id_fkey FOREIGN KEY (mov_id) REFERENCES public.movie(mov_id);
 C   ALTER TABLE ONLY public.rating DROP CONSTRAINT rating_mov_id_fkey;
       public          postgres    false    209    3203    215            #   a  x�UTKr�8]�O����g)K�ĒR)�cW��i��@�6}�9�\le�l�h�����L'�R��c��2����Q�["�W8�I�3Ywh;y�s��
������x��7��#�X�V��7���#.Rx Z���H�\����f
�x1��\����$��č�4i���\O�n�;Y��l�e�1-j��\��6Lг���pRƊ������,�am���F*��U�R��$>���؁}Au
G�$���a�0q
������ǌ�M#I,LZ�i;��b��8k�oR06"�g���c�.�]\�o+����H3M�{K�(��N�ģi�E�*�ᶓj7jԗ(�0��>K��*��O�6�8�_��׊P�l�R�&��ђ>���}����Ҽb1H<a�d̬��Ɉ��0<ZD,QKRbaQ!���I�����#��G{��7du�E��|�(Obe%��dqN�b/u��n��e�S���%���(����E	yh �c��,�;��Z���?Y�߬�U�!�u���䇷���8�GȊK��P�.�
�؟G%<Ɏ/��L�W3��X�;��Ð1�G��1����
�>�A,͛�I<�k�*�`�qZPZ
�#�X�]��]0?��
���~�q��V�;��.*Tܹ�T����l�n0��/��)y��Z����)�%s���hr�N��mY_3����8-9]�L
ǁ]�di_X�^ܪ}(&N27���2�d]��Ecf��f*��\q��$���>��*�����rI{���^ͫ�M��'օ�9[𕃴ę�1LMR�c�K�͘�w�}�)l凘����plIk����0� ����������      '   *  x�eP�N�@<;_�_��Nzm�B�JU�������n��Eޕ��=����x<c��#�KEƐ/�pP��MEbC\��B��~:	�{�^*�x;8Rx�$v�k4x�2XYG�Rl�݌�a��N��I�u�V���%<+}+��]�3x%F�D�T3l�BؠgU�b��듍�(��a�B#�i�İ���䒉:��$�=��-��յ)<�b�2���2x���W�i��Z��n?���7��!6pb)OM���Iʩ&���	S�N��(�<G��W�&ň�2q����~<:+���wA|~°e      (   *   x�KL����L�鹉�9z������eƅ�I��\1z\\\ �f�      "   �   x����uC1D�PL��C���ב/�֫+�`���CYJ��Y+���4)AM[��
��w6�Ku%O��k+M'�~I%9P�좁���!�h�(��=�p�e�]�N�)Uf�	Lm��gi&d��ꄌdRQ��ؗ5W���)Rx�F�x��Tp'=���h�,!�^�Q�:�ꤲ�������v�Vg�)$}ذ�NTc�k]L��1�F�_.���<�O�8���3�jQr      !   �  x�UR]o�@|6�����I[z���� 	�t/VdI�[m6T�_N��E���3�Y��Y<R�����Q��`I�np�_�� eY
�%�qCYq���H�u%�l/�/�d�r8�7����SK�C���5���<S�|�w�d��$���m���6�=g��Vx�&��S��/蓟�{'Ed��9�I����Ը��"���:jk�s�%z�8�bX���9�)� ���;<ܨ����L)���؀����l-]���Um�pk�E�}�QM�\,Wߴ��������)�ܹ�8O���"x�t�w�y�(�`^x��Qh�[��'Sx�dK|%O'g�hM��j���h�#�Ɠ������n�!y+m-�y5vA�A�֚��)�U�V�^qߎ�<�*7�a�M�/����E��;���ʨ�������iW،c���*�V%���~�w�"��l�@��������٧_'k�����h4�YE/      %   s   x�]�A
� E��)Z�F�t��m&��Q��n)D��0��ߠ>ٻ���&�zC��!�59ql��T:{���2���G)��W�`0���9�M�:��zt��G�L9�(�7�>@P             x��}ɮ�X����W�o�Q�H��$�&������[Q��0����{��/��!u��B��
0������,�f�������[��6���ho�$��9��8�{/4���l�Xc���J��:$�"&�\7fSc�$�
&�^v-]c��H�oV�����׋O��t�"H}��6=���i�Ln%&��$��UF�p�?��F�ܴ\�3%���I>=dH��zX��[p!�jE���`)���_W�7�Y.��3�f�>?���s0��(I#8،��0�$`,���������,��[Q��E�}&
bh�۝0�\�k�`8��·�~��k�曙$a����<8�g��� 2~O~�9^do��n������js�{o���v� ��'���ݾ���=�=q7��κ� �Qou�|�lP���O%�~�<YS�5米�vt�ӥ6Y���ے�p�Ğ����t?�gd?:q��J��b�?V�l��>)D�{-���;��[��Fw�t�U$��{�����麭�g�S�Ƴ��]h�Z�� �_�e��H��O{�)�n��,���5��b~M"��b&�=;�Jw�7�ĩ�@Ĉ�9c±~y�-��%�i�{�G��ё5���i��?�����0p#�S��ݰ�B?P ��.�ܷz
�dvKc������G R�xocZ.R�b%�`չI -�D�[0<_1�/k���0��0�Qse���<N�[{��L���aՆ)g��yIn��/�h}���������i��Z�مs�ӥ6 &d�\�l�_�|4��:�^���	7{	3<�ٵ��Ó�^�7$�>��޺���M8�y�=U;���h$��C3dxr�\�{�d$!�*Y���}��t�y@�h>��������jA"�����!I0{��y�5 8��Pm�Rx���?9M*@! "��� K\7�KA ��cFA�)	2\͵�@��,�z��j��!d��i��Λ����;���P]�>'Ն��=_�����b~�L���X��������(o��x�//����W��R�q����6nX�n� ׂ@�>��BX��yVD+�gf��V##�u~�W%���j@���o<�/�٩Ǖ���z��`���Hi���;+�ut�khwT��pLZ�|g��	0@\xͅ�����n���`2��������D�
;�����`�1sK���}����Q?N��|�A�?��GL-������1��(��� `��������%�ޔ0
�g�|6��y��$�}0��i ��w�1BX&�o��D�`��Zh���i���$��h�@:��:<���;��ˡ|-?ߤV}�7��9�@Yx������${~v�����,�hŧ�x�_�vμ��.z/p��i�+w5�(�=�|���`2_;è�qk4�e�=ֶ��_�Z�ǣ���6�s.'�ݕ�d6�t(��|�w��v
v�xQD� p�w��q.�tR9h��S3�ҷ���&�D���rQF}1at�Y @\�z 0�^V!P {�������<\1D�C�ť)�� |:<o`��\��6?�G�Yyc�(}�s�"$�8��2q�^�Vĳ������/���ma�����R���Jn_,�i��q�/�A��	�x�����x�f�|4|�ë���;x�N^� �LSMl�����;>4/�3�~-����9�ӱ���=�Q���K���:__����}�s�|�m!r��"�������C����5����v��
p�e��@�����/�Ⴎ�̔��ؽ4�k�*^�@|JqH�?&t���h�[��2qhE�� Nx�>NO&�H���hs�83�ډ��]�^=����Ik<o���&8�����N���K��	���i���)�M�ES�5���pL����Rk����B��<\��DN��'�a��4S�E�7�mތ��v4&�N3�8%�⤏�c�C����"���Dj�ط.I���}�⯑?�.f9�0�S�<�!�m�|��`��'�1#ܪ��o�Id)	�I0�/:&Q���`�Ƙ6c0Pf�R�^0�<�-5:pS�O�
Ȗ˰	�E��j��W+]0��>�ML�!�̴g��:F��Vơpb���������Y�����8R��Hl>�rT>��&:h��16���ҊZp�b%`�}�����"$c��i � <(�_0�&��}gq��D����ٹ=��[��6�S�8�ӻ�qQ�k�d���i��Aq��<�׍��:uw��5�_1����23���N����Л���#29Y͸�>�o��Bl��i���;_8����v���E�-^����e�������_��� � �ꂁ%�W���C��6�0�S��&zK9P|j>�>�0����*�L7
�t�eF�lA��x)\C'��	�k9�l��]��y
^I3DP�E�΁^�Z6wFb�!��M������񹹕/v����� ���v�%���a|�t�<=6������ ���ew8{�y��mֿ��7��#/q2%���lkQޯMOׅ�Gq���bw���0�f[�Z��r�����aES�۞ė����Q� p�:
��!�=��B�_�'����.��Zԁ���d�>�8�s眈
��Ƙ^�&-�̒��S�j���^h0�;\l���vL=�pʜHQ 5C�I#��82�a��Ϗ�����ՊkE�
@\&o�V�xe P��E��ΖQ%d|A���R�o)PjD1���HD)��A��� ���6I�6��SKR-+:�����3/��> ��r;+&k1ڄsv"�׍�!�΍���e�?��韧D���+��;���Ô��f�������K(>ڵ����r<������
�۬�o*�R�I��[�Yb��ڢ2BJIzip=�I��iր֒�aQ�`�)�yf�ԝ�b�`��heX�@G�!֐�p薋(L��2[��P<3�:n1ԭc��*F�1<r�"�$�-�K
�߫a;{dq�u�p��	��E�u�t�+mB-(�Uq4���3��^�����'���]#��'m�٥��u^����Ֆp\��>N���t���Ջ́<�V5����/^��3w�{(��WB#��I�D�N��|�^
�vU�)n&e�hL�<�t�U.]�.����y�]n�a�L�c�#�������:�o>��r?su3��~Z	ɮ�|��}0��I1�qI��_ �k�
�Ro�H�x�$KOݎ�h�E��zR|�v��F�=?���3�	�~0_��N����r�(�7/�'�kE��%�����d�N���#[��P���M[�����f���,��۹���ul,���U�y�0���)j�gEIZ��"߱BB,���D}~;�����=�b!A)�)����I��X3�(���f��{9����L�������ϼ�ܵ{^xs���l�f��vy�/��`sɵu�G}4��ݶe�|�����Rw�Cpdw�?�V�?Z>��j%l՞4:5��,�j�l�A-b����o����k�Ƭ7��UG��V�)Ƴv�P���)v��0;Qj��&��C�3xC��D�� ��fDZ��_FJQ�L�g�Jy����`#�����h�|��c<D�F���������|%��2�/���<����d�r֨�c�����,���6�U���eg>?���Րt���t�5�r&�B�������~���2n�p\p��t�|�%mv���~��ŝ�L8:���$8Ka֪u���e%�G�����t�Kgވ�ުĆ�~�3�?�>8�O1�������� |�5H�k��~`d%D1��l����l���G(9�=�	�0"���G��IK$QZ)ЊH�`E��_xSV]�a|�vţ��PDJm��[^x"���a���wW��
)/?����"��J����m��s�h�Ԙn��8?t�^o��;����8e�`�fҊ�    ��~�Ө�7�Ϳ#McFi��R�w����wh[�j,�X&�AK=Xc%p��9��(��Ԡ`V�W��R��1 �}^�޽G�f���d�t����p���/Bc�����?�H��(-O��x�bmt�=� L�O�b5�ۗ�P��(�^Ѳ���ě^��|7i�݊�������|Ҕ��k�	���K��1^j3�;�v疻R�xux)����[{�/r�6ym5��I+ozN�Xf�65��A���ۢ@����-ēh;>�L��Am~	F1/B�}��)3&��XӼ��TH!�����ޖ��y��j` ��x7��3�M��E6t,}�K%Ț�\d{��������x+�K]�����i�h8����<9�����~*�/�?�ڊ~<L�#�fV,6��M.f��Kj=��<O&����N�V0�r��W���~���mAH���a'KI��[/�eTb<H4�R"��x;*AT"��3�2���p���3�V U��,� ���,_�1����I��>�A�b ��KE^h,(��J"�:$vh>%����@ ��_����_���t�6Ҕ��Ye�	� ��U���)uU����Q@7��h;�r���p�[�����:7�iu|�������N�YΏ�����k��Q�K\��Ӥ�7�VY�E�~�5ٓ>�ᬐ�Zh{$W!˹&���5Z�m:ߌ�/�W�|������s�֣c>Ћ��6Ͼ"W,g�m�
���Is�<6i�b��fT8�5&��$[�̀��E,&�˪b�iר|3N��э�nSy�w&��	���ȴ� �)�EݦG<�T<�a�
������K(�j�"V���~BP�L�~��8������x�O��Z4��^=��Ez�@�8��a��[�Wt7���v�y�>4��A��p�w/��.I�~�@k��Y�M��k{5©(
=^���-�ܼ�͸�M��z��=�fR����6�7��'��0拽~�u~4�[	��-r�s�1��u%99�J��'i�o��f��T��
o���40���!��]���
D�X���8@h]��C�H�*Z)��V\�
ʩ+IU� T(�hZ�����c��"SNu���Ծ��Z�B|H���f���'�_H��X��ɪw����O��eŋy���]��qvX�����el���M��6d�����C������Mo�	�BUg��5��m5v���ۻr�vwnA�����`L��
�Z�[i�^�Br�w��yRğ�)�1*�� �lճ�b���NW��8�d�X!�?��1A8Al��22R�T7�,�t<�@'Y��KBK�E9 � &�QA8�|S1K_��S,Z �,��Eo�h�����������T��l�J*��T����TK)s�
����fְ��i�t�XHO��N}��zj�9I���fK��I�D�� &��
�H�#��H]\Q�;����f�b���̆gv�v��9֩��uo�٬_�E�|ip����?$��*�d��icӉVے������!���]T�kބͤE*�u�Jc�A��̊��vӈ��)�䖼�I���lV���X�*� d�`���
y�W:x����������JX�2��'�r�ƈj4Qtv��Cw-�n��	i����;\��WY�(�'��w�yW$�T�N�s��=^ k=��N$�k�,l|I��s{^t�[�޿������H�Q��gI���X�i�^�	�U����������!,�#�ףFC��;.;�[Ò�b�4�[�$��$��$�C�7ط������<����`�il �;@I/a���2��VD��B:�Ӯ0���&#U�̇��y鸬9�O���	`j����W��i���(���q��%y�Y6�C�ӏ���r�4r��j�N��f��9{zI�5���	���8�-{g'�����zef�m�-Z����,�^�<��Y�},���NY�qY�zW����\�t����Úm� _2��h���UA�+�	i�D�`��ĕV�G��5���rL���.M�J|t�)Q�� >-���U������
��1Pu4�r��.A��r�RxN��+,+����-p͘��z���ȃ@��k�����wkg^����Og��c|u#V��\��!*f�����sʪAkw�La$�,��rO�����=���Q&^�h�V�؞��Y�9<v��>ܟ�% �,�d�]��j��F�v��^{�l��g�$�.��k��So~�=.��B���6�J��Ŗ1[�����1Z�i�r�����ͪZT\��y���Vȏ���I��)�]g W�iF�&��h��ָl���A�K�����W?3P�\;/��AZ)��>*-���v@�^�7hgC���g��=); �%[}lp�OO^)lhY�����Z��0P�CXՏoMZia�@-iIZu/����~�Z� Ǥj~)pRi�J`���a�P�ٓd�_����G�a�-Y�t���R�n1i?��St�uy�����<�V���ٳ��jc��k��6�V�P���ɸ��L�M�k��[ЬײpYu_ʧ3����t[˻��qR�|k���^f�/_�ڒ>���v�����7}R��h���B��%1'�#O٬D�qH���VTu)�i���Q%��n@���#�|��~БU9�b?v��L0h,Z� (j�!���&�bL�a�u��t��vx�Q��`mK,�'�_(��.l*�q^�hv��	�������X�Y�8:����#%��k�����?���L��U�$ڌ���P;ѥ׾Kbq�S��b�^'Bb���J���]}�oH4��I�Q��ٷe�쭒�[��ҹ��Ko]�@�Yq54��ƪE��+|�a�5��#�-o�UA 1%��cҢ�B��	~��=�*�An�2C�ם�kU�>�foҡ�c�N��N��P��Mլ��"�c�>��\eb�8[�C�RheTE�ᆤ�����3r��ZKj:�7�O}xD���X�KޓA��&�|�*?�,0'�b��X�m�񣎭
�r5��-�ua�~�]���T���(�����6��zGNe{������˿}�}EX�5��E��zѡe;Kv���3g����X/��Q�?E�e-)��(����l�Y��:�
i��E�:����N����	���|�m�ȳ��<�x?r*�%:��8����H�X*�#�H�#},@D���Њ� OHQ�1�c���rG�"Q�/D�B����G�*�VD���B�0���T]?��_��Z{c�7�dо$C��ix�N��_X�wg�Jx�֦�Yy3CotWa��@�]C�>�o^w!�q纒#"�M�p���v�O�z���a<���r�fgˋK�]���˨����av��w7��7{�5�k�i8h�YQ��6�ԂLz킙�V
�Y��<e��4�j�ýD[[.m�-P�ZF�`�T)��V�3������?�$��Gp)�֦��y��a`�$�oI�dg�W��C[y��i'M�qaCN���;�> �/_+��h�|�~LVk^FJ���9z]ɧ��lk����^�~���#/.�f����³3n7��~�!D�����us꜏��~�w'B$�d�G�kM��I�KB�[�j��r�$O� �A�I�MH؆Z����H�j����X��,��U���+�ʧ��3XQs�I��|he�c�4r�($��r7i�_�^y��d��N�1�š՚��Z�j�ټ~��p���f*�e?����󫘿d/����RR����C'�v��9��S},��w>ʓNV��f5'먿�Z��M��\��l7�%r�h�5Nǽ���1Y#�6evM�k�!�����p�O�������ۂX��*�b4,� �|T'� P�WI��2p�/���=�]���o�rE��DS����2��)�kts	Ԫ�C��q�$vd{YKR�'Sf"�F�3=�D���5XG�-����N����dk��ɃY���/�ѹ�6li�}��g�S-Q�;���M��gk2����ۺ�    ���>e�'�֔&߅��X)΅�����k��X�����3
�7٤f��bB��IYcz�U��-�z�k NԷ������b���s)��v�ҮVHd�U�l�}+�V�&%Z�O��b���H�}��2��[�n�����ק��^���ɑ�$?n��BF�Th_�VrZ��Q���4;�99��QQŘO��h�Z��g��k��uݵ�Z��U5"+WO���;�,��e�W�R�+	e���$ylb�u���Wj�JN��$�殍�aD����m�$��?�;���(���꣏���@��L�P�	o ~���_{N0)�>KyU�3?�FV�⇹ �i�����ū�1���T�g��RH7r���]�rfSL�L������ϛ|,�9��2����SwN�sˇ'y�B"g��WR^���/�g<���M<4ب����l�I�d>��k��/T�����Zٸ0��f�^s���0����?���*�Q�%�hC���4h���j��z�JRߝ�����s�N��#�-�a���,Ȭ�Ѭ����6��AR6�����m��sM-z���XT֨�5�ߌ�2a3�o���zRx��o��
���k��w����!���� ����qYА�R1رK�?��?me�1Ԍ0r�& �2�D�W� �(ް�66��긓�Aή��c2|d�����]�߬�.�:�s�8����uN��|���Zc�н�'B�P��L�U�z�@^�;ne�7��5�_+�i��7�{Kμ������UmD�úU/Ԍe�!�����HM��4��m��+���¾����vJq1���Э�� ���O�!Y�Pa4Ƒ�0(����<�����:��σ�,B�����-<�"T.���C��"�
�g�����5��ݢ}9`�rbauSf�c|�`��.��R�hQۤ݃�K|���+T�n�RRoPV(ot�:��Ag�@
O�R��T�|��[r���r�T��u'0��L��7^�*�JV�RJ�J~�{��{)��܏�Z�#B¨l;�1�V2�x�(&ѳ}�S��C�Fc���Y�_���AoSڢ�o��n�z�n/��ϡTA��q��m#^�<Jg�z�{�(������1[.^�F���<��uw+_o8]Ϯ�^�5Y>���UYJ^2�7��	Ǻ�tG&�V��5v�Vw ���C']���Kx|�@q������6+ �@�j���y����MDQ�L�4���)K��*e-�|V�e�zʟS���
�Wf�:���U�D�H}lK}�  v�ڽvp,���]���ps�4��oz$��/��C���w�un�@5⛽���}�_@��j�i�^�k�)���?�J��N;�ְ�i��ǭ�[כgְ��.λ�6���M�&n�ۚrM�R�v�k�P��i���.$>N��gi(<Jqv�:��*��'�X�Z�H����a�&�zF�TuM��,Zi���ťVFXu0 ����[����KF)�JM,l�	!�I1�6b馿K)�~|�_�\�7N�0��O�-�TEx�p�����]-6ߵ������'Z�����~7V�>탙+'��M������4;�W��~��4��T�>�Z«a�Ʃ�o�À�����v��.�[[l����a_��TI��5��e�ja�\�[�D*tD|`5��;!������$p�ϩSt(#�K(���d'x�ck9N��-��U�w�K$I�L��r�������*@���_���K@��$)>������I�J����B��/�.X��l�Ǩ�t���$����:�|"�g��6+]�������푱
�y��r��q��.�+��q�����=d��/�l0��U�W�1	����M�љ-ry��z�^��PZ��	�d5)�Q���~~�*ME�۠�!A�7��o��q�@E��FE?;�"wL�9}:o���A@���Aa�W̵�C^�$D��m$Do	�Δ��ֶ@��9pi)3L������Iv�`UR��^���O�U�$�>�O�s�y�V� �E���H}���uSSV����o��e&��w77~���]S���P��X����}aT{��&��=:���d�3�̔<�1��-�q�6�[�zs0Z��l|戽l��;�nE�x�V�����h%�ik0�g��쵇!��=qJ|��o�DX*8���g�[�Ú@�GB*�� *!/�����8����?>��'P%Z����`vI93��!�E�v&>g?1���W��Ģ�\��8G*NR-2����1��r��X�ND�����)�4z��P��e����Bo[
1hQ�Lc����\K��cZ��iF�w;v;�ϻ뺫���I��Iƽ�s}`X�8�sm?^�^����b�z���}�dm�n"���ks9�FJ�muN�ΰώ�`���d0Q��@���~�z��;��f�3�t6{��ӭ��ö�Z?��q;vﱖz�1˳`Z5蔺�]j)X��aD��V|ڢ��M��61�t�PnR��0]��8�A)�gm#Q'XW��>��ͩ��v����j��E9P*h��oq ?v�hp��_&Qf���˜?:�h�T{���H�Q�3�-_O1��r|�`��@�����Ҝ���W��~39l=�׾UaR�$�?0��B�.�u���Vޙ�r,-;^���ݿ�B�';��0@^���C�o��2j��8;,#�t_�y��6;��쓰�g�s��C�y�1����z-XMӯr�?���b4��j��OJ;*��v��%�fv�}�,J	?P[�H�����{��~S����<�ĹӡT)� @�mK�<�qY揨Lp��Ԑ�W+�/�N�8U��e�P�,�ոw�^+m
��0j���ڦ����Q����m�O�%n�����嫮-��W��ud��c�8s;�ǡ�>H���%}=��C����;np�+{�TS�G{�w��4�}�4��-5u��ƽZc���Z)�y�m���yT�A��?�Cb^(�vhz
�Y��M�թrK��T|T�9X��Q�#�Q�X�4�g0�B5��¤N+6�OQ�C�?��d�S7��!��:��HEBQ6�Vr�:y�#oa�Uqi�7�K��*��4w�c����G��x��'�؍��ܽ��U׻IN��Cm��}��]���jwh�C����S�F[��y��[KKj�AZ��{��z[�^Ic�s�rpr��� �-/؋�}w��S�t�5�[��U+{�<u�"����?�od���F�όRD�8C��e�=m�'�gu�P�p���Dp���-B���^"%��q.�U�-�a��Up��Aճ�5kب��N�]�������3�/��[��Bm�Խ�?N^��%�ϗe�:9P��B{p�8�㇤�A���n��֕>-K/�o�9�����4����O����6���IW����yws9�w7�I�o�ľ�oP��?�_�������o��� ͖��=Lq����S�q�U�-�kVX�t��f=K�em+#e�M9�k��G�<ry*�l�/�q�/s�ѹ�� rW�A�F��Y�$a18���tp����>���0~�4>p�Ͳ��(���C���.�#K������T�YΥ�z"��k[#�G��".�ۂ�;��]�Ad;��h�Ҽe�bE����;Hi���;���`E1���)�p��zT�ΐ��&ᦕ̱���?�T_�R�����"�!�uZ6�	
4���p&֗_"��ᦺ�\w��������	�' ��J~P�7p�D����k��\���(¬&tGu��	�::V�Q_�{~Ⲫfc���!	!Y�т@>G��A���4u�s��"3�;��S\i���ٟ:�tyN��=��f�#�Gs~;��]��� z��֋/ٟ�N����k2�l��h$6m-��'�^��X��kt���*��Y�����wn�*�N�[�G�r���L��𠱉lƩ� �e�%�����#�QY_�§ߣ��pϦ���~L�r4v�1G�E����Z���@�D��{Te�	?;��q.
{�.J����>�w����IQ �  NdC���g�dUy��&)�r�O��ġ���W�}U_�J�E��vh����i�sLU5����]��R�^*~?����9:��c҅`Q�5Jxd��,�����t�.�Z~E�IQt�5�;o�Uw6V�~z^���~��i�&��Y����W�N��j�N�O��ڴg�9\�^���XiY����?͖���4�[����n^s�<��Yv��|�g���|J;b��IsZ��Z|�XƂ��CTΚ([l������?����<������ZUs�r���E��V5^��L�gO���X�On������Ӏ��鼝�:�p��LPb^"���h+��1U�dv�*���)�Pr��n_F��Bí���!t�����^	�I����+֭���u���D���h������M��CɕM�{��%�������E�^�d����WR�esO)q��cTl��Lw�&��}���XO�p7Gf(L��q�v�m�$��j��������~����u      $   �  x���ݍ�0��U1IQ�i�*���g�Fr� y��YyMѴO�WX����$Wo�I'�Ե�)ve�N��B'N�e�4$(v���g8qu/o��"���C�"�Z�ݡ��Y�N;�Nܥ�!�g�c���R��M����Z�f�A}B���y*W�Q�{�;�<�Թ�z4e����S �a��)�� ,o]:�"�H!��ϵ�j�Q�����Bq
<�)�1��4c�N����)�~e�dUQ���L��O�˵)
���!b���z��<���v��oP���&��$El23��7��Q/�U��9ҧ��L��mM5��;�/ҹӽ6DB�g�X9#}��{����'���?�3�w� R��y��"N��rtt�N��)vc��i�R���2�nQ���6�ءg�1+S'Fg���}�DZ�+�3F�	�>��3V�AE(�*��j}�g�����Z�7�-�      &     x�u�O��6���O1�ڂDY�S���"@�n�K/cidML�*I��|��.��fÖ�!�{o�h��~�N�:��4�s�g����F�� �;�X{��>1� �����zt�\�� M�P��J�U��h�����HΒ��]t؅�>>��V���b!2�����DeJ����u�����ZeyS�����a����إ�1�ݏhn�z����#��e�<6��D�^�c`?�rf�^*{������O=;궍"���@��Mh:��Kޢ-�����Po�,9'�X��"����ú)~����ׯh��4�(NQ�˱� �3�&�����N�i��xD��¾-[U�uSe��ǠeV�c�Sb��|�N�o<�n=��{���o&�	]1��!��z�ֈ�,?���-]�ǳ�Wg�_$X�؜XŨ��A�_^��,-���o�8��&y'��f1/٘5�e�G�v�o8IX�˷�Z�Ɓ\����[R.Z�.�eG��K[��Q���i���uݖ�����x#֕RI-ԟ� 5Jg��a��5�>�i���b�@(�[x�FM�K)�@Z�U���aq���0�L���86S�k�y���:7Q�f���s��y�~����=���>�E��G�{!9���)mT^�1���O_����-�hW-�4�{��[�u�#C7R�2�2����Qt�>�,�ү==1��C^Rl�&���UMZ4YY�?&��<�����/���ʃA���|sZ�z����ST����*T�<~�� �e�#     