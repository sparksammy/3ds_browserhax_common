<?php
$CODEBLK_ENDADR = ((0x00100000 + 0x00277000 + 0x00064000 + 0x0000A000 + 0x00045920) + 0xfff) & ~0xfff;
$OSSCRO_HEAPADR = 0x08133000;
$WEBKITCRO_HEAPADR = 0x083ff000;
$PEERCRO_HEAPADR = 0x0831a000;
$APPHEAP_PHYSADDR = 0x2b000000;
init_mapaddrs_cro();

$STACKPIVOT_ADR = 0x0027b63c;
$COND_THROWFATALERR = 0x00262c70;

$ROP_POP_R0R6PC = 0x001df878;
$ROP_POP_R0R8PC = 0x0030ca40;
$ROP_POP_R0PC = 0x00297368;
$ROP_POP_R1R5PC = 0x001dce58;

$ROP_STR_R1TOR0 = 0x00226810;
$ROP_LDR_R0FROMR0 = 0x001f792c;
$ROP_ADDR0_TO_R1 = 0x0027beec;

$ROP_WRITETHREADSTORAGEPTR_TOR4R5 = 0x00297a0c;

$srv_GetServiceHandle = 0x001eab84;

$svcGetProcessId = 0x0026c130;
$svcSendSyncRequest = 0x001eb1c0;
$svcControlMemory = 0x002639e0;
$svcSleepThread = 0x002d91d4;

$GXLOW_CMD4 = 0x002a299c;
$GSPGPU_SERVHANDLEADR = 0x003e33d0;

$FS_MOUNTSDMC = 0x00319448;

$IFile_Open = 0x003229fc;
$IFile_GetSize = 0x001f1f04;
$IFile_Seek = 0x0032e064;
$IFile_Read = 0x0030cb64;

$FS_DELETEFILE = 0x0032622c;

$FSFILEIPC_CLOSE = 0x0026828c;
$FSFILEIPC_READ = 0x00268234;
$FSFILEIPC_GETSIZE = 0x00335050;

$POPPC = 0x001df694;

$ROP_STR_R0TOR1 = $WEBKITCRO_MAPADR+0x00422440;

$WKC_FOPEN = $OSSCRO_MAPADR+0xde430-0x4;
$WKC_FCLOSE = $OSSCRO_MAPADR+0xde420-0x4;
$WKC_FREAD = $OSSCRO_MAPADR+0xde428-0x4;
$WKC_FWRITE = $OSSCRO_MAPADR+0xde438-0x4;
$WKC_FSEEK = $PEERCRO_MAPADR+0x1f83d;

$ROP_curl_easy_cleanup = $WEBKITCRO_MAPADR+0x4dbb58-0x4;
$ROP_curl_easy_init = $WEBKITCRO_MAPADR+0x4db6c0-0x4;
$ROP_curl_easy_perform = $WEBKITCRO_MAPADR+0x4dbc20-0x4;
$ROP_curl_easy_setopt = $WEBKITCRO_MAPADR+0x4db6c8-0x4;

$ROP_MEMCPY = $WEBKITCRO_MAPADR+0x4daf68-0x4;
$ROP_MEMSETOTHER = $WEBKITCRO_MAPADR+0x4daf48-0x4;

$ROP_snprintf = $OSSCRO_MAPADR+0xde228-0x4;

$GSP_FLUSHDCACHE = 0x0029dfe0;
$GSP_WRITEHWREGS = 0x00298808;

$IFile_Close = 0x001ec6a8;
$IFile_Write = 0x00327970;

$THROW_FATALERR = 0x001f1ed4;

$ROP_LDMSTM_R5R4_R0R3 = 0x001e8bb0;

$ROP_POP_R0IPPC = $WEBKITCRO_MAPADR+0x001b2ea0;

$ROP_LDR_R0_FROMR0_SHIFTR1 = $OSSCRO_MAPADR+0x00102834;

$ROP_STMR0_R0PC = $PEERCRO_MAPADR+0x0001ef51;
?>
